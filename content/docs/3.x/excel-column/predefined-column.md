---
layout: docs
title: Predefined Column
description: Which custom action you can do using Predefined Columns, such as after the webpage is loaded and after the entry is saved etc.
group: excel-column
aliases:
  - "/docs/excel-column/"
  - "/excel-column/"
toc: true
---

To add these columns, you have to open the *options page* of the extension and after that you can add these columns by going to the tab of *page settings* and clicking on the **plus (+)** button below.

{{<img insert-custom-column.png>}}

## List of Predefined Columns

- [page_loaded](#page_loaded)
- [fill_action](#fill_action)
- [form_filled](#form_filled)
- [entry_saved](#entry_saved)
- [background_response](#background_response)
- [element_exists](#element_exists)
- [save_response_message](#save_response_message)
- [error_messages](#error_messages)
- [status](#status)
- [isLoading](#isloading)
- [totalErrorRequest](#totalerrorrequest)


### `page_loaded`

After the page is fully loaded, you can give your Custom Script.

### `fill_action`

If you do not want Automatic Form filling or your form opens after any request, then you can place Javascript event in any HTML Element in the page.

### `form_filled`

After the form is successfully filled, you can give what script you want to run.

### `entry_saved`

After the form is successfully saved, you can give what script you want to run.

### `background_response`

If Request Run is being done in Background After this, if a success message is received.

### `element_exists`

Form will start filled when this element is visible.


### `save_response_message`

Save Entry Response Message Data in the Excel Sheet Column [Entry Response Message - {0-9}].

### `error_messages`

If the error message matches while filling the entry, then the entry will skip and the error will be added to the Excel sheet. [Entry Error Message - {0-9}].

### `status`
### `isLoading`
### `totalErrorRequest`