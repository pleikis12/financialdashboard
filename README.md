Interactive Financial Dashboard overview - 

How to use - 
Dashboard - Main menu

Log in/registration - Create account and log in - reveals sensitive information 

Used

HTML, CSS, PHP, Apache server, SQL db, JS, Docker, Kubernetes cluster AWS

Make sure Docker is installed to machiene

How to build Docker Image - 
In terminal access the root folder off "test" run command 
1. docker build -t financial-dashboard . 
2. Forward Port with command in terminal - "docker run -d -p 8080:80 financial-dashboard"
3. docker-compose up -d
4. Check docker program if the image is contanerized, and images for the program has been built
5. Test by accessing the url "localhost:8080"