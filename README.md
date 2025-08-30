# Phishing Simulator & Social Engineering Toolkit (Educational) 🎣

## 1. Project Overview
This project is a **Phishing Simulator** built for educational purposes. It demonstrates the mechanics of a real-world phishing attack in a safe, controlled environment. The goal is to learn about **social engineering, web forms, and credential harvesting**, not to harm anyone.

The tool replicates the key phases of a phishing attack:
- Setting up a fake login page.
- Capturing user credentials (for demonstration only).
- Redirecting the user to the real page to avoid suspicion.

> ⚠️ **Important:** Only test this on your own accounts or in a safe lab environment. Never target real users or companies.

---

## 2. Technologies Used
- **Operating System:** Kali Linux / Ubuntu / Debian (any Linux with PHP support)
- **Languages:** PHP, HTML
- **Tools:** Python (optional, for sending demonstration emails), Git, VS Code/Nano

---

## 3. Folder Structure
```
PhishingSimulator/
├── website/
│ ├── index.html # Cloned login page (fake)
│ └── capture.php # Credential harvesting script (educational)
├── .gitignore # Ignored files
└── README.md # Project documentation
```

---

## 4. How It Works

### Step 1: Start the PHP Web Server
```bash
cd website
php -S 0.0.0.0:8080
```
This will host your fake login page on http://localhost:8080.

### Step 2: Visit the Fake Login Page

Open your browser and go to:
```
http://localhost:8080/index.html
```

Fill in the login form (for testing purposes).

### Step 3: Capture Credentials

All submitted data is saved in credentials.txt (inside the website folder).
Example:
```
--- New Credential Harvest ---
email: test.user@example.com
password: MySuperSecretPassword123
Timestamp: 2025-08-30 20:00:00
```

### Step 4: Redirect

After submitting, the user is automatically redirected to the real website to simulate a realistic phishing scenario.

## 5. Safety & Ethical Guidelines

Only test this on your own accounts.

Do not use this tool against real users or organizations.

This project is intended solely for learning purposes in cybersecurity education.

## 6. How to Contribute

Fork the repository.

Create a feature branch:
```
git checkout -b feature-name
```
Commit changes:
```
git commit -m "Add new feature"
```

Push to the branch:
```
git push origin feature-name
```
Create a pull request.

## ⚠️ Disclaimer

This project is created **solely for educational purposes**. It is designed to help learners understand how phishing attacks work in a **controlled and safe environment**.  

**Important points:**
- Do **not** use this tool to target real users, organizations, or any online service without explicit permission.  
- Unauthorized use of this tool to capture credentials or sensitive information is **illegal** and can lead to serious legal consequences.  
- Always conduct experiments in a **local lab environment** or with accounts you own.  
- The creators of this project are **not responsible** for any misuse of this software.  

By using this project, you agree to follow ethical guidelines and only use it in a **safe and legal environment**.

## 7. References

Social-Engineer Toolkit (SET) Tutorial

PHP Official Documentation
