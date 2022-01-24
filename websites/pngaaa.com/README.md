### Home :- <a href="https://wholly-api.herokuapp.com/">https://wholly-api.herokuapp.com/</a>

---

References - [Website Scrapping ](https://www.google.com/search?q=Website+Scrapping)
Web scraping, web harvesting, or web data extraction is data scraping used for extracting data from websites. The web scraping software may directly access the World Wide Web using the Hypertext Transfer Protocol or a web browser. [Wikipedia](https://en.wikipedia.org/wiki/Web_scraping)

Article Link :- <a href="https://dev.to/sh20raj/scrapping-pngaaa-and-made-an-api-of-it-on-whollyapi-story-time-1fma/">https://dev.to/sh20raj/scrapping-pngaaa-and-made-an-api-of-it-on-whollyapi-story-time-1fma/</a>

### See This is the API endpoint-

`https://wholly-api.herokuapp.com/websites/pngaaa.com/`

See this website `https://www.pngaaa.com/` has no feature of API so that a user can not show the website's (https://www.pngaaa.com/) content on their website.

Fetch Using JavaScript :- [Ref. Google](https://www.google.com/search?q=javascript+fetch+json+from+url)

But after scrapping it and made a API for the users. Users can fetch the websites content on there website **even using Pure JavaScript**.
The different URLs will return you different results in JSON format. Just grab the JSON Using any Server Side or Client Side Language and Show on website.

---

## Some API Uses are Given Below :-


If PngAAA.com have any worry or problem for this just contact me. I will remove it. This is Just made for educational purpose.

---

## Fetch Categories

`https://wholly-api.herokuapp.com/websites/pngaaa.com/categories.php`

---

## Fetch Search Results

`https://wholly-api.herokuapp.com/websites/pngaaa.com/search.php?q={{Your Query String}}&page={{Your Page no.}}`

See an Example Here :- 

https://wholly-api.herokuapp.com/websites/pngaaa.com/search.php?q=dog&page=10

It will return you Something like this

```json
{
    "status": 1,
    "query": "dog",
    "page": "10",
    "data": [
        "1017701",
        "822790",
        "2077049",
        "1654031",
        "2152102",
        "2482165",
        "4024007",
        "4031578",
        "4450534",
        "2607152",
        "2607021",
        "3467009",
        "3588913",
        "4417695",
        "476470",
        "3269049",
        "1346069",
        "3269105",
        "874509",
        "2388600",
        "3190080",
        "4417699",
        "3190068",
        "3467051",
        "421309",
        "598495",
        "265445",
        "421378",
        "421416",
        "476402",
        "730339",
        "4024023",
        "4023993",
        "4024014",
        "774073",
        "1012741",
        "1012876",
        "2467859",
        "488821",
        "488826",
        "488828",
        "730398",
        "730401",
        "1353186",
        "1353171",
        "4376447",
        "4376472",
        "3351561",
        "3394213",
        "3466976",
        "616844",
        "1012866",
        "1147281",
        "2467854",
        "3402659",
        "315805",
        "4031580",
        "616928",
        "265431",
        "265463",
        "265485",
        "616796",
        "616815",
        "774154",
        "874538",
        "2388606",
        "3201266",
        "3399937",
        "4417776",
        "265425",
        "476396",
        "476494",
        "476407",
        "530053",
        "874542",
        "822745",
        "2104714",
        "1403416",
        "1653907",
        "4031539"
    ],
    "suggetions": [
        "Dog Png",
        "Dog Logo",
        "Doge Png",
        "Hot Dog Png",
        "Dog Transparent Background"
    ]
}
```

You will get So many id's in data array of the JSON and See What to do with this id's. This are basically Image id's.

Let's Assume `1017701` this is our id.

- Direct Download URL - https://www.pngaaa.com/api-download/1017701
- See More Usage Below

## Fetch Image details Using ID

`https://wholly-api.herokuapp.com/websites/pngaaa.com/details.php?id={{Your Image ID}}`

See Example Here :-
https://wholly-api.herokuapp.com/websites/pngaaa.com/details.php?id=1017701

It will return you something like this.

```json
{
    "status": 1,
    "id": "1017701",
    "title": "Locket Necklace Dog Tag Military - Dog Tags Transparent Background Png,Dog Tags Png - free transparent png images - pngaaa.com",
    "size": "162.81 KB",
    "download": "https:\/\/www.pngaaa.com\/api-download\/1017701",
    "middle_size_image": "https:\/\/image.pngaaa.com\/701\/1017701-middle.png",
    "small_size_image": "https:\/\/image.pngaaa.com\/701\/1017701-small.png",
    "filetype": "PNG (72dpi)",
    "related": [
        "1017681",
        "1017682",
        "1017683",
        "1017684",
        "1017686",
        "1017689",
        "1017690",
        "1017692",
        "1017693",
        "1017694",
        "1017697",
        "1017703",
        "1017704",
        "1017707",
        "1017710",
        "1017712",
        "1017714",
        "1017717",
        "1017719",
        "1017720",
        "1017722",
        "1017723",
        "1017724",
        "1017725",
        "1017726",
        "1017727",
        "1017728",
        "1017731",
        "1017743",
        "1017744",
        "1017747",
        "1017749",
        "1017751",
        "1017755",
        "1017758",
        "1017760",
        "1017762",
        "1017763",
        "1017764",
        "1017765",
        "1017771",
        "1017774",
        "1017775",
        "1017780",
        "1017782",
        "1017783",
        "1017786",
        "1017787",
        "1017791",
        "1017793"
    ],
    "date": "2020-03-31 11:17:25",
    "license": "License:Non-commercial Use",
    "dimensions": "441 x 1201"
}
```

- You are getting title, other size image's link, direct download link and many more thing...
- You are getting some related images id also that can show related images.

# [Is website scraping is a crime](https://www.google.com/search?q=is+website+scrapping+is+a+crime)

Web scraping itself is not illegal. As a matter of fact, web scraping – or web crawling, were historically associated with well-known search engines like Google or Bing. These search engines crawl sites and index the web. ... A great example when web scraping can be illegal is when you try to scrape nonpublic data.

Still -

If PngAAA.com have any worry or problem for this just contact me. I will remove it. This is Just made for educational purpose.
