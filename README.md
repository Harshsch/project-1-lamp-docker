
---

```markdown
# LAMP Stack with Docker

This project sets up a complete **LAMP (Linux, Apache, MySQL, PHP)** stack using Docker and Docker Compose. It also includes a sample PHP application that connects to a MySQL database and displays user records.

## 📦 Project Structure

```

<pre><code>project-1-lamp-docker/
├── lamp-docker/
│   ├── apache-php/          # PHP and Apache configuration
│   │   └── index.php        # Sample PHP script connecting to MySQL
│   ├── mysql/               # MySQL initialization files
│   │   └── init.sql         # SQL script to create DB and table
│   └── docker-compose.yml   # Main Docker Compose config
└── README.md
</code></pre>


````

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/Harshsch/project-1-lamp-docker.git
cd project-1-lamp-docker/lamp-docker
````

### 2. Run the Project with Docker Compose

```bash
docker-compose up --build
```

* This will start:

  * `Apache + PHP` server
  * `MySQL` database
  * Network them together

### 3. Access the Application

Once all services are running, open your browser and visit:

```
http://localhost:8080
```

You should see a list of users fetched from the MySQL database.

## ⚙️ Configuration

* PHP App: `apache-php/index.php`
* MySQL DB:

  * Database: `demo`
  * Table: `users`
  * Root user: `root`
  * Password: `rootpassword`

## 🧪 Example Output

```
ID: 1 | Name: Harsh Chavan | Email: harsh@example.com
ID: 2 | Name: Alice        | Email: alice@example.com
ID: 3 | Name: Bob          | Email: bob@example.com
```

## 💡 Learning Objectives

* Understand Docker and Docker Compose
* Learn how to containerize Apache, PHP, and MySQL
* Handle DB connections from PHP to MySQL inside Docker
* Practice real-world debugging and error handling

## 🛠️ Tech Used

* Docker
* Docker Compose
* Apache
* PHP
* MySQL

## 🧑‍💻 Author

**Harsh Chavan**
GitHub: [@Harshsch](https://github.com/Harshsch)

---

```
