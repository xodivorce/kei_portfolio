# [Student Information System Website](https://github.com/xodivorce/kei-portfolio)

### Welcome to XODIVORCE. - deveoped by [@xodivorce](https://instagram.com/xodivorce) ✨
[![status](https://img.shields.io/badge/status-active-brightgreen.svg?style=flat)](https://github.com/xodivorce/xodivorce-portfolio/)
[![version](https://img.shields.io/badge/version-v1.1.1-yellow.svg?style=flat)](https://github.com/xodivorce/xodivorce-portfolio/)
[![PRs](https://img.shields.io/badge/PRs-welcome-blue.svg?style=flat)](https://github.com/xodivorce/xodivorce-portfolio/)
<br></br>

### 📌 Tech Stack
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![JAVASCRIPT](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)

### 🛠️ How to Contribute: Let’s Make Magic!

Want to jump in and sprinkle some magic on this project? Follow these steps:

1. **Fork and Clone**:
   - Hit “Fork” at the top-right of the page to make your copy. Then clone it to your local machine:
     ```bash
     git clone git@github.com:xodivorce/kei_portfolio.git
     ```

2. **Set Up Your Local Playground**:
   - Move the project to your XAMPP `htdocs` folder:
     ```bash
     mv kei_portfolio /path/to/xampp/htdocs/
     ```

3. **Fire Up XAMPP**:
   - Launch XAMPP and start Apache and MySQL:
     ```bash
     # Open your browser and head to:
     http://localhost/phpmyadmin
     # Then create database:
	 kei_portfolio
	 #Now create table "student" with 7 columns:
	 CREATE TABLE students (
		id INT NOT NULL AUTO_INCREMENT,
		name VARCHAR(255) NOT NULL,
		phone VARCHAR(15) NOT NULL,
		email VARCHAR(255) NOT NULL,
		college_id VARCHAR(50) NOT NULL,
		course VARCHAR(50) NOT NULL,
		reg_date DATE NOT NULL,
		PRIMARY KEY (id),
		UNIQUE KEY college_id (college_id))
		ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
     ```

4.**Set-Up Phpmyadmin**:
 - Launch XAMPP and start Apache and MySQL:
     ```bash
     # :
     open -a XAMPP
     # Start Apache and MySQL in XAMPP Control Panel
     ```

 5. **View Locally**:
   - Open your browser and head to:
     ```bash
     http://localhost/kei_portfolio/htdocs/index.php
     ```

6. **Pro Tip**: Use a Self-Signed SSL for local development to keep everything smooth and secure with HTTPS. 🔐

7. **Having Issues?**:
   - Ensure you follow the steps correcly. For help, email me at:
     *hey@xodivorce.in*

8. **Create a Feature Branch**:
   - Before diving in, create a new branch for your feature or fix:
     ```bash
     git checkout -b cool-new-feature
     ```

9. **Work Your Magic**:
   - Make your changes, test them, and get ready for a pull request.

10. **Commit and Push**:
   - Once you’re happy, commit and push your changes:
     ```bash
     git add .
     git commit -m "Add some cool feature"
     git push origin cool-new-feature
     ```

11. **Open a Pull Request**:
   - Go to the main repository and create a pull request. Let us know what you’ve done and why it’s awesome!

12. **Celebrate Your Contribution** 🎉:
    - Enjoy the glory of your awesome contribution! We appreciate all your help and ideas.

🚀 **Got Ideas or Spotted a Bug?**  
Don’t be shy! [*Open an issue*](https://github.com/xodivorce/kei_portfolio/issues) to discuss new features, enhancements, or any bugs you find. Your feedback is golden!!

- Let’s create something epic together! 🌟


### 📝 License & Usage

Prasid Mandal(xodivorce) - kei-portfolio Website is a Fully Open Sourced Project licensed under [**MIT License**](LICENSE.txt). Anyone can view, modify, use (personal and commercial) or distribute it's sources without any attribution and extra permissions.

**🌟 Liked this project? Please consider giving it a star to show me your appreciation.**
<br></br>
<br></br>

****

An Open Sourced Project - Developed with ❤️ by **xodivorce**
