# 🕶 Song Details

### Song details by link

```bash
https://jiosaavn-whollyapi.vercel.app/songs?link=https://www.jiosaavn.com/song/thunderclouds/RT8zcBh9eUc
```

CURL

```bash
curl -X GET 'https://jiosaavn-whollyapi.vercel.app/songs?link=https://www.jiosaavn.com/song/thunderclouds/RT8zcBh9eUc' \
 -H 'content-type: application/json'
```

| Query Paramter | Description                                                 | Required |
| -------------- | ----------------------------------------------------------- | -------- |
| link           | Song link from [https://jiosaavn.com](https://jiosaavn.com) | True     |

### Song details by song ID



```bash
https://jiosaavn-whollyapi.vercel.app/songs?id=5WXAlMNt
```

CURL

```bash
curl -X GET 'https://jiosaavn-whollyapi.vercel.app/songs?id=5WXAlMNt' \
 -H 'content-type: application/json'
```

#### Multiple IDs

You can also pass multiple comma separated song IDs in a single request.

```bash
https://jiosaavn-whollyapi.vercel.app/songs?id=5WXAlMNt,csaEsVWV
```

CURL

```bash
curl -X GET 'https://jiosaavn-whollyapi.vercel.app/songs?id=5WXAlMNt,csaEsVWV
' \
 -H 'content-type: application/json'
```

| Query Paramter | Description | Required |
| -------------- | ----------- | -------- |
| id             | Song ID     | True     |
