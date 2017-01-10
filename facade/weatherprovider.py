import urllib
import urllib2

class WeatherProvider(object):
	def __init__(self):
		self.api_url = 'http://api.openweathermap.org/data/2.5/forecast?q={},{}'

	def get_weather_data(self, city, country):
		city = urllib.quote(city)
		url = self.api_url.format(city, country)
		return urllib2.urlopen(url).read()