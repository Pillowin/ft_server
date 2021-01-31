# Usefull commands :
- docker build -t myapp:1.0 .
- docker run --publish 8000:8080 --detach --name bb myapp:1.0
- docker run -it --publish 8000:8080 --name bb myapp:1.0

- docker ps -a
- docker container rm $(docker container ls -aq)
- docker rmi -f $(docker images -qa)

- openssl req -x509 -nodes -keyout key.pem -out cert.cert

- docker build -t ft_server:1.0 .
- docker run -it -p 80:80 -p 443:443 ft_server:1.0
