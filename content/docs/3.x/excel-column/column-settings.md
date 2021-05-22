---
layout: docs
title: Column Settings
description: After connecting the Excel Column to the form field, you can do the settings of the column in which Run Javascript, Set Event, Set Timeout, Set Form Field Type etc.
group: excel-column
aliases:
  - "/docs/excel-column/"
  - "/excel-column/"
toc: true
---

## Run Custom Javascript

If you want to run the [Javascript](https://en.wikipedia.org/wiki/JavaScript) after filling in the data form field of the column, then you can do this through this option. For which you have to click on the **JS Button** given below in the right side of that column, after which you will have the model open in which you can write the code of *JS*.

{{<img run-custom-javascript.png>}}

{{<img custom-js-model.png>}}

### Shortcut Key

- <kbd>Ctrl + S</kbd> = Save
- <kbd>Ctrl + Q</kbd> = Gutter to fold a block
- <kbd>F11</kbd> = Full Screen JS Model


## Other Settings

You can do some more settings of the column by clicking on the **Settings** button given below.

{{<img column-settings.png>}}

### Set Form Field Type

With this option you can set the type of field of the form. This is not necessary, but if the data in your field is not being filled, then you can see this option by setting it.

{{<img column-settings-field-type.png>}}

### Set Default Value

If the value of the excel column is empty, then in this option you can set the value that will be filled in the field of the form when the value of that entry in the excel column will be empty.

{{<img column-settings-default-value.png>}}

### Trigger Javascript Event

This option is set when one field is connected to another field such as **state** and **district**. That is, when we change the name of the state, then the districts of that state are loaded in the district field. So for this in the state column we have to give the **change event** in this option so that when we change the state name, the change event will also run and the district will be loaded.

{{<img column-settings-js-event.png>}}

### After filling the data of this field, filling the data of another field

This option is used when two or more form select boxes are connected to each other such as `state`, `district`, `block`, `village`.

If we select the name of the state, but the district of that state is loaded in the area of the district [(by using the change event)](#trigger-javascript-event), but the name of the **district is not selected** which we gave in the excel sheet. So for this, we fill the name of the field (district) whose name is not being selected, fill in this option and press enter. Which is also given to us as an image below.

{{<img column-settings-after-fill-field.gif>}}

### Timeout

If you want to fill the data in the field after some time, you can give the time in the field of **Before Timeout** and if you want to delay some time after the data is filled in the field then you can give the time in the field of **After Timeout**. In these fields, time can be given only in *milliseconds*.

<kbd>1000 milliseconds = 1 sec</kbd>

{{<img column-settings-timeout.png>}}


### Force Check Element Exists

By turning this option on, it checks the element until it is visible in the element page and when the element becomes visible in the page, only then the next element starts filling up.

{{<img column-settings-check-element-exists.png>}}
