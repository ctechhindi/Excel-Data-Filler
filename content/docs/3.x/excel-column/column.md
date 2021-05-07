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


