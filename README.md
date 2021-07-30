# Magento 2(Admin Token Generator)
This module will generate admin token as soon as the menu "GET TOKEN" is clicked.
## Basic Flow of the module
- Firstly, after cloning the git and extracting the folder wrap it inside folder **GenerateToken** and again wrap this folder in **Task** so inshort, create your directory as magento-root-directory/app/code/Task/GenerateToken/cloned_directory.
- After that open the magento root directory in terminal and hit the following commands,
  - `sudo php bin/magento module:enable Task_GenerateToken`
  - `sudo php bin/magento setup:upgrade`
  - `sudo php bin/magento setup:di:compile`
  - `sudo php bin/magento setup:static-content:deploy -f`
  - `sudo php bin/magento indexer:reindex` (optional)
  - `sudo php bin/magento cache:flush`
  - `sudo chmod 777 -R var/ pub/ generated/`
- Now, open your web browser and type in the following link to open magento admin (assuming for localhost or else type in https://your-magento-from-ftp/admin) **localhost/magento-root-directory/admin** you will see an admin menu named **GET TOKEN**.
- Don't rush up to click on it since you will not be able to receive admin token before setting up.
- Go to **Stores -> Configuration -> Generate Token -> Token Settings** here you have to provide your magento URL as well as admin credentials.
- After that, click on the admin menu named "GET TOKEN" you will see a generated admin token with a button named "Copy Token" which copies the entire token to the clipboard as soon as it is clicked.
- Use this admin token in various ways i.e. checking APIs in Postman as well as customer data, etc.

**Note :**
- Do not try to get admin token without setting up credentials info in configuration. Doing so will result in unnecessary issues in admin.
- If general settings are not modified for admin i.e. if the token expiration time is not changed manually then its expiration duration is about 15 minutes so don't think why after this time its not working ; either changed it manually or do generate it whenever required.
- Beware changing the module and vendor name since it can be a bit hectic and will require a keen vision on every file.

### Happy Coding :)

