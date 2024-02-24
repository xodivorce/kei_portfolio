# kei-portfolio website

### 📌 Tech Stack
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![JAVASCRIPT](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)

### 🛠️ Contributing

Want to be the part of this project? Get started by following this simple steps . . .

1. Clone this repository in your computer

2. Install git in your computer.

```code
$ brew install git
```
3. Macports(if not installed)
```code
$ sudo port install git
```
5. then command this on terminal
```code
git clone (HTTPS or SSH link from the repository:(https://github.com/xodivorce/kei-portfolio))
```
6. var sheetName = 'Sheet1'
		var scriptProp = PropertiesService.getScriptProperties()

		function intialSetup () {
		  var activeSpreadsheet = SpreadsheetApp.getActiveSpreadsheet()
		  scriptProp.setProperty('key', activeSpreadsheet.getId())
		}

		function doPost (e) {
		  var lock = LockService.getScriptLock()
		  lock.tryLock(10000)

		  try {
			var doc = SpreadsheetApp.openById(scriptProp.getProperty('key'))
			var sheet = doc.getSheetByName(sheetName)

			var headers = sheet.getRange(1, 1, 1, sheet.getLastColumn()).getValues()[0]
			var nextRow = sheet.getLastRow() + 1

			var newRow = headers.map(function(header) {
			  return header === 'timestamp' ? new Date() : e.parameter[header]
			})

			sheet.getRange(nextRow, 1, 1, newRow.length).setValues([newRow])

			return ContentService
			  .createTextOutput(JSON.stringify({ 'result': 'success', 'row': nextRow }))
			  .setMimeType(ContentService.MimeType.JSON)
		  }

		  catch (e) {
			return ContentService
			  .createTextOutput(JSON.stringify({ 'result': 'error', 'error': e }))
			  .setMimeType(ContentService.MimeType.JSON)
		  }

		  finally {
			lock.releaseLock()
		  }
		}
7.  Using a Self Signed SSL in dev server is highly recommended as some of the site features only works with secure https protocol

⭕ Noticed any Bugs? or Want to give me some suggetions? always feel free to open an issue...!!

### 📝 License & Usage

Prasid Mandal(xodivorce) - kei-portfolio Website is a Fully Open Sourced Project licensed under MIT License. Anyone can view, modify, use (personal and commercial) or distribute it's sources without any attribution and extra permissions.

**🌟 Liked this project? Please consider giving it a star to show me your appreciation.**
<br></br>
<br></br>

****

An Open Sourced Project - Developed with ❤️ by **Prasid**
