require(ggthemes)
require(gganimate)
require(ggplot2)
require(gifski)
a <- as.character(state)
require(dplyr)
pop <- GET("https://datausa.io/api/data?drilldowns=State&measures=Population&year=latest")
popData <- fromJSON(rawToChar(pop$content), flatten=TRUE) %>% as.data.frame()
popData <- dplyr::select(popData, data.State, data.Population)
population <- as.numeric(popData[,2])
#Cumulative cases by state(including U.S.) and date
cum_link1 <- GET("https://data.cdc.gov/resource/r8kw-7aab.json?$limit=10000", app_token = token)
cum_data <- fromJSON(rawToChar(cum_link1$content), flatten=TRUE)
cum_data1 <- data.frame(cum_data, header=T, stringsAsFactors=F)
cum_data1$covid_19_deaths <- as.numeric(cum_data1$covid_19_deaths)
all_df <- dplyr::select(cum_data1, state, year, mmwr_week, covid_19_deaths) %>%
  filter(year==2022,state!="United States") %>%
  na.omit() %>%
  group_by(state) %>%
  summarise(total=sum(covid_19_deaths))

all_df <- all_df[-34,] %>% cbind.data.frame(population)
#total # of covid cases / total population
st_case_density <- (all_df$total / all_df$population)
all_df <- cbind.data.frame(all_df, st_case_density)

all_df <- all_df %>% top_n(10, st_case_density)
states <- all_df$state

data <- dplyr::select(cum_data1, state, year, mmwr_week, covid_19_deaths) %>% 
  filter(year==2022,state!="United States") %>%
  na.omit() %>%
  filter(state %in% states)

p <- ggplot(data, aes(x=mmwr_week, y=covid_19_deaths)) +
  geom_point(shape=20, color="darkblue") +
  theme_fivethirtyeight() +
  scale_x_discrete(breaks=c(0,8,12)) 
p + facet_wrap(vars(state), ncol=5) + geom_line(size = 1.0, alpha = 0.8, aes(group = "states"), color = "blue") +
  theme(axis.text.x = element_text(angle = 30, hjust = 1), legend.position="none") +
  ggtitle("Cumulative COVID-19 Deaths in 2022\n for the ten states with highest\n death/population ratio") 

data$mmwr_week <- as.numeric(data$mmwr_week)
r <- data %>%
  ggplot(aes(x=mmwr_week, y=covid_19_deaths, group=state, color=factor(state))) +
  geom_line() +
  scale_color_viridis_d() +
  labs(x="Week Number",y="COVID-19 Death Count") +
  theme(legend.position="top")
graph1.animation <- r + geom_point() + transition_reveal(mmwr_week)

gganimate::animate(graph1.animation, height = 500, width = 800, fps = 30, duration = 10,
                   end_pause = 60, res = 100)
anim_save("top10.gif")

