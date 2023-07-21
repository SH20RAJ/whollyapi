# Homepage Data

### See a Bot Made with the API :- [https://telegram.me/@saavnmp3\_bot](https://telegram.me/@saavnmp3\_bot)

### Get homepage modules

Get launch data from [https://jiosaavn.com](https://jiosaavn.com) homepage for different modules such as `songs`, `albums`, `trending`, `charts`, `playlists`, etc.

RequestResponse

HTTP

```bash
https://jiosaavn-whollyapi.vercel.app/modules?language=hindi,english
```

CURL

```bash
curl -X GET 'https://saavn.me/modules?language=hindi,english' \
 -H 'content-type: application/json'
```

| Query Paramter | Description                                                                                                                                                             | Required |
| -------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------- |
| language       | One or more languages from Hindi, English, Punjabi, Tamil, Telugu, Marathi, Gujarati, Bengali, Kannada, Bhojpuri, Malayalam, Urdu, Haryanvi, Rajasthani, Odia, Assamese | False    |
