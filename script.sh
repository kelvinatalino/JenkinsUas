# Stop all running containers
docker stop $(docker ps -aq)
# Remove all containers
docker rm $(docker ps -aq)

# Remove php-apache image
docker rmi trucorp-web-2.0
# Remove mysql image
docker rmi trucorp-web-2.0-mysql

echo "---Successfully Remove Containers and Images"
