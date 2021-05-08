---
layout: docs
title: Excel Column
description: In the Excel Sheet, the Column of the table indicates to fill the data in the field of the form.
group: excel-column
aliases:
  - "/docs/excel-column/"
  - "/excel-column/"
toc: true
---

{{<img excel-table-column.png>}}

## Validation

- All column names must be **unique**.
- The name of the column should not be in the name of the [predefined column]({{<docsref "/excel-column/predefined-column#list-of-predefined-columns">}}).

## Connect column to the form field

After inserting the columns and data in the Excel sheet, now we have to link this columns to the field of the form so that the data of that column fill to the form field. This is needed if you have created an Excel Sheet [manually]({{<docsref "/excel-data/generate-excel#manually">}}).

### Fetch Columns

Before connecting the column, we have to fetch all the columns from the excel sheet, which we have to go to the tab of *page settings* on the extension *options page* and click on the button given below:

{{<img fetch-excel-columns.png>}}

After which all the columns from the Excel table will appear to us as the table below.

{{<img excel-column2.png>}}

If you have downloaded the excel sheet by [automatic method]({{<docsref "/excel-data/generate-excel#automatically">}}), then there is already connected to column, field in it.

{{<img excel-column.png>}}

### Connection

If there is no data in the **Field Address** box, then you need to add that column to the field of the form. Which is shown upwards. So there are two ways to make connection between excel column and form field.

#### First Method

In the first method, we click on the icon of the extension which comes in the right side of the URL of Chrome Browser Bar. After clicking on Icon, a new window will open.

{{<img extension-icon.png>}}

After this, in this window, the column you want to connect to the field of the form has to click on the cursor icon in the left side of the column name and after that you have to click on the field of the form in which the data of that column will be filled. And in this way the excel column will be connected to the field of the form. Which you can also see as an image below.

{{<img excel-column-connection.gif>}}

#### Second Method

In this method we will right click on the field of the form and after that go to the extension menu and click on the option of **Copy Field Address**, after which the address of that field will be copied. Which you have to go to the *extension page* and paste in the **field address box** of the column with which you want to connect. You can also understand by the image given below.

{{<img excel-column-connection-right-click.gif>}}

{{<callout info>}}
**NOTE** : If you cannot right click on the web page, then you will have to use the [first method](#first-method) itself.
{{</callout>}}

