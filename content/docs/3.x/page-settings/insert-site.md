---
layout: docs
title: Insert Site
description: To do automatic data entry, on which web page we have to fill the excel data, for that we have to give the url of that web page.
group: page-settings
aliases:
  - "/docs/page-settings/"
  - "/page-settings/"
toc: true
---

To set the url of the web page, we have to open the *options page* of the extension and open the tab of the **Page Settings**, after this we will see a button called **Insert Site**, by clicking on it, we can insert the url of the webpage.

{{<img insert-webpage-url.png>}}

# Fields

To insert the url of web page, we have to fill the url data of web page in the fields given below.

## Site URL

The [URL](https://en.wikipedia.org/wiki/URL) of the webpage has to be given in the field of Site URL. There are two types of URLs, one which is always the same and the other which keeps changing. Therefore, we have given another field [Site URL Type](#site-url-type) in which you can set the type of URL.

### Site URL Type

In this field, you can select the url type of the web page by the options given below.

- [Full Path]({{<docsref "/site/url-types#full-path">}})
- [location.pathname]({{<docsref "/site/url-types#locationpathname">}})
- [location.hostname]({{<docsref "/site/url-types#locationhostname">}})

## Success URL

In the field of Success URL, We have to provide the URL of the web page on which the success message of the entry is received. And after that, we have to set the URL type in the [Success URL Type](#success-url-type) field of the web page to which the web page is getting the success message. Success message can be such as:

- The record has been saved.
- The record has been saved and record id is 666.

Insert this success message in the [Success Message](#success-message) Field.

### Success URL Type

In this field, you can select the [Success URL](#success-url) type of the web page by the options given below.

- [Full Path]({{<docsref "/site/url-types#full-path">}})
- [location.pathname]({{<docsref "/site/url-types#locationpathname">}})
- [location.hostname]({{<docsref "/site/url-types#locationhostname">}})

### Success Message

In the field of Success Message, We have to give the message received after the entry is saved. It is not necessary in the field that you give complete success message text, you can also give some part of the message. like this:

<table class="table">
  <thead>
    <tr>
      <th scope="col">Received Success Message on Webpage</th>
      <th scope="col">Insert Message in the Success Message Field</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>The record has been saved.</td>
      <td>The record has been saved.</td>
    </tr>
    <tr>
      <td>The record has been saved and record id is 666.</td>
      <td>The record has been saved</td>
    </tr>
  </tbody>
</table>
