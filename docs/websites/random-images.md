---
description: Get Random Images API for free from Lorem Picsum
---

# 🖼️ Random Images

## Lorem Picsum - The Lorem Ipsum for photos

Lorem Picsum is a simple and versatile tool for generating placeholder images for your projects. Whether you need random images, specific ones, grayscale, or blurred variations, Lorem Picsum has got you covered. This README provides an overview of how to use Lorem Picsum and its various features.

### How to Use

#### Easy to Use, Stylish Placeholders

Just add your desired image size (width & height) after our URL, and you'll get a random image.

*   To get a random image of size 200x300:

    ```
    https://picsum.photos/200/300
    ```
*   For a square image, just add the size:

    ```
    https://picsum.photos/200
    ```

#### Specific Image

Get a specific image by adding `/id/{image}` to the start of the URL.

*   Example:

    ```
    https://picsum.photos/id/237/200/300
    ```

#### Static Random Image

Get the same random image every time based on a seed by adding `/seed/{seed}` to the start of the URL.

*   Example:

    ```
    https://picsum.photos/seed/picsum/200/300
    ```

#### Grayscale

Get a grayscale image by appending `?grayscale` to the end of the URL.

*   Example:

    ```
    https://picsum.photos/200/300?grayscale
    ```

#### Blur

Get a blurred image by appending `?blur` to the end of the URL. You can adjust the amount of blur by providing a number between 1 and 10.

*   Example with default blur:

    ```
    https://picsum.photos/200/300/?blur
    ```
*   Example with custom blur (e.g., blur=2):

    ```
    https://picsum.photos/200/300/?blur=2
    ```

#### Advanced Usage

You can combine any of the options above. For example, to get a specific image that is grayscale and blurred:

*   Example:

    ```
    https://picsum.photos/id/870/200/300?grayscale&blur=2
    ```

#### Requesting Multiple Images

To request multiple images of the same size in your browser, add the `random` query parameter to prevent caching:

```html
<img src="https://picsum.photos/200/300?random=1">
<img src="https://picsum.photos/200/300?random=2">
<!-- Add as many images as needed -->
```

#### File Formats

*   To get an image with a file ending (e.g., .jpg):

    ```
    https://picsum.photos/200/300.jpg
    ```
*   To get an image in the WebP format:

    ```
    https://picsum.photos/200/300.webp
    ```

### List Images

You can get a list of images by using the `/v2/list` endpoint.

*   Example:

    ```
    https://picsum.photos/v2/list
    ```

The API will return 30 items per page by default. To request another page, use the `?page` parameter. To change the amount of items per page, use the `?limit` parameter.

*   Example with page 2 and limit 100:

    ```
    https://picsum.photos/v2/list?page=2&limit=100
    ```

The `Link` header includes pagination information about the next/previous pages.

#### Image Details

Get information about a specific image by using the `/id/{id}/info` and `/seed/{seed}/info` endpoints.

*   Example to get info about image ID 0:

    ```
    https://picsum.photos/id/0/info
    ```
*   Example to get info about a seed:

    ```
    https://picsum.photos/seed/picsum/info
    ```

You can find out the ID of an image by looking at the `Picsum-ID` header or the User Comment field in the EXIF metadata.

### Attribution

* Images are sourced from [Unsplash](https://unsplash.com/).
* Lorem Picsum is proudly powered by Fastly.
* Created by David Marby & Nijiko Yonskai.

### Support

Having trouble? Feel free to reach out to [@DMarby](https://twitter.com/DMarby) on Twitter.

Enjoy using Lorem Picsum for your placeholder image needs!
