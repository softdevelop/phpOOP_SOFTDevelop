# README #

This README would normally document whatever steps are necessary to get your application up and running.

### Testing tasks ###
DESCRIPTION: Task must be done in OOP!Use only libs that you have on this template. Push files to your git account
--------------------------------
1.##First task###page show_api.php
   1.On form user enter keyword , select provider(google,bing etc.),country , language.
          -create json files for each provider for country and language(see file /server/class/KeywordToolsAPI.
          -add event on change on provider and when user change provider to for example to bing , call ajax and display country and lng for that provider.
          -validate keyword input field
          -set default provider data (google->google cuntry, google languages)
          -form must be method=get
    2.Save data into db
          -check if data exists into db
          -if data exists in db, return data from db
          -if not exists, save.
          -DB fields:keyword,provider,language,country,data,date.

   3.Show data
     -show data from db or show data from api
     -If user select keyword "php", provider bing etc. call /json/bing.json and display data into table. For google call /json/google.json etc.
     -if we have kw/provider/langauge/country combination in db  just return data from db
     -don't call any api just simulate call.
     -row fields: string(keyword),cpc,cmp, volume
     -data to show example: {"string":"make money online fast","volume":4400,"cpc":2.08,"cmp":0.8}


2.##Secund Task## file goole_related.php
        -Create google related scraper.
        -You can use simple_html_dom lib(/server/lib/simple_html_dom.php);
        -User enter keyword click generate than show related kws in dropdown "Show Related"(ajax).
        -User can uncheck keywords
        -when click to "save related" save checked related into db
        -db info:id,user_id,keyword,related_kws


