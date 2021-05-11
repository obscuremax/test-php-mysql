# Junior Developer Test Task

[Test Task URL](http://obscuremax.epizy.com/)





## A web-app containing two pages for

1. Product list page
2. Adding a product page

### Product list

![image](https://user-images.githubusercontent.com/53945011/117823844-9758db00-b276-11eb-8dde-098ebfd0721b.png)

**The list items contain the following details**

- SKU  - *Only Latin letters, numbers and spaces*
- Name - *Only Latin letters*
- Price in $ - *Only numbers in the format 222.00; 25.50*
- One of the product-specific attributes and its value
    1. Size (in MB) for DVD-disc - *Only numbers in the format 23, 265*
    2. Weight (in Kg) for Book - *Only numbers in the format 23, 265*
    3. Dimensions (HxWxL) for Furniture - *Only numbers in the format 23, 265*



**UI elements**

- “ADD” button, which lead to the “Product Add” page
- “MASS DELETE” action, implemented as checkboxes next to each product and a button triggering delete action for the selected products.
- There be no pagination for the listing, all items be on the same page
- Do not show any notification messages or alert windows loading the list or after submitting ADD new product dialogue

### Add product page

![image](https://user-images.githubusercontent.com/53945011/117823926-ad669b80-b276-11eb-88a4-2e2b9bce4191.png)

**The page display a form, with the following fields**

- SKU
- Name
- Price
- Product type switcher (DVD / Book / Furniture)
- Product type-specific attribute:
    - Size (in MB) for DVD-disc
    - Weight (in Kg) for Book
    - Dimensions (HxWxL) for Furniture

### **Add product page requirements**

- The form be dynamically changed when type is switched
- Special attributes have a description, related to its type, e.g.: “Please, provide dimensions” / “Please, provide weight” / “Please, provide size” when related product type is selected
- All fields are mandatory for submission, missing values trigger notification “Please, submit required data”
- Implement input field value validation, invalid data must trigger notification “Please, provide the data of indicated type”
- Notification messages appear on the same page without reload
- The page have a “Save” button to save the product. Once saved, returned to the “Product List” page with the new product added.
- The page have a “Cancel” button to cancel adding the product action. Once cancelled, returned to the “Product List” page with no new products added.
- No additional dialogues like “Are you sure you want to Save / Cancel?”

### Used
- PHP
- SCSS
- JS
- MySQL
