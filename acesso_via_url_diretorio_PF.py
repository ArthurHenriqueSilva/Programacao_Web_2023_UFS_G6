import requests
import re
from bs4 import BeautifulSoup

directory_url = 'https://servicos.dpf.gov.br/dadosabertos/SISMIGRA/'

response = requests.get(directory_url)
html_content = response.content

soup = BeautifulSoup(html_content, 'html.parser')

file_links = []
for link in soup.find_all('a'):
    file_url = link.get('href')
    if re.match(r'SISMIGRA_REGISTROS_ATIVOS_2022_\d{2}.csv', file_url):
        file_links.append(directory_url + file_url)

for file_url in file_links:
    response = requests.get(file_url)
    csv_content = response.content

    print(csv_content.decode('utf-8'))