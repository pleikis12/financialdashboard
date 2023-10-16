Interactive Financial Dashboard overview - 

How to use - 
Dashboard - Main menu

Log in/registration - Create account and log in - reveals sensitive information 

Used

HTML, CSS, PHP, Apache server, SQL db, JS, Docker, Kubernetes cluster AWS

Make sure Docker is installed to machiene

How to build Docker Image - 
In terminal access the root folder off "test" run command 
1. docker compose up --build 
2. Check docker program if the image is contanerized, and images for the program has been built
3. Log in to SQL database, on url "localhost:8081" "username=registration_form" "password=password"
4. Head into registration form - Create table = users (4rows) - (id(autoincrement)),(user_name(varchar-255)),(password(varchar-255)),(name(varchar-255))
5. Test by accessing the url "localhost:8080"
6. Log in to access sensitive information.

Uploading docker image on AWS -
In terminal -
1. docker build -t financialdashboard-docker-images .
2. docker tag financialdashboard-docker-images:latest 317075783247.dkr.ecr.eu-north-1.amazonaws.com/financialdashboard-docker-images:latest
3. docker push 317075783247.dkr.ecr.eu-north-1.amazonaws.com/financialdashboard-docker-images:latest