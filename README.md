# Swenson/ProductVisibility

URL visibility filter for Downloadable product in Customer Accounts section

Pull the repository and add the module under

``app/code/``

After adding the code execute the following command in terminal in order to install the module

``php bin/magento setup:upgrade``

Flush the cache

``php bin/magento cache:flush``

# Follow the steps to verify the functioanlity

- Open Admin Panel and add any downloable product, isVisbible check is added in the general tab section, create the product with all necessary information
- Purcahse the newly added product to the cart and complete the order
- Open My Account and in My Downloable Products the product will be shown
- Change the status of product in admin panel in order to show/hide the download link


