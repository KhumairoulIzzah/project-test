# Import the requests library
import requests

# Define the API url
api_url = "https://suitmedia-backend.suitdev.com/api/ideas"

# Define the API params
api_params = {
  "page[number]": 1,
  "page[size]": 10,
  "append[]": ["small_image", "medium_image"],
  "sort": "-published_at"
}

# Define the proxy server
proxy_server = "https://fr.4everproxy.com/secure/RehjmHQUlPuLic9VOSzY~Do~k_7goAzJSLdIXTKhAZklAtzPN2IcTvmOQV7AkwQL" # change this to your proxy server

# Define the proxy port
proxy_port = 8811

# Define the proxy username and password
proxy_username = "izzah"
proxy_password = "456"

# Define the proxy type
proxy_type = "https"

# Define the proxy url
proxy_url = f"https://izzah:456@fr.4everproxy.com:8811"

# Define the proxy dict
proxy_dict = {
  "http": proxy_url,
  "https": proxy_url
}

# Send a GET request to the API using the proxy
response = requests.get(api_url, params=api_params, proxies=proxy_dict)

# Print the status code and the content of the response
print(response.status_code)
print(response.content)