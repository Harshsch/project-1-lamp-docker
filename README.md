lamp-k8s-app/
├── k8s/
│   ├── mysql-deployment.yaml
│   ├── mysql-service.yaml
│   ├── mysql-secret.yaml
│   ├── php-deployment.yaml
│   ├── php-service.yaml
│   └── init.sql
├── apache-php/
│   ├── Dockerfile
│   └── index.php
├── README.md
└── .gitignore


# LAMP Stack Deployment on Kubernetes

This project demonstrates deploying a containerized PHP–MySQL web application using Kubernetes (Minikube).

## Features
- PHP container running a simple app that reads users from a MySQL DB
- MySQL 5.7 container with initialized data via mounted volume
- Secrets for MySQL root password
- Internal communication between services using Kubernetes DNS
- Deployed via kubectl in local Minikube cluster

## Getting Started

```bash
minikube start
kubectl apply -f k8s/
minikube service php-service
