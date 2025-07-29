  
<a name="article-api"></a>

## 📂 Article

### `GET /articles`

Fetch a **paginated list of articles** published on the Laranepal platform. Each article includes metadata, author, and category info.

---

#### 🧾 Request Details

**Method:** `GET`  
**Endpoint:** `/articles`  
**Base URL:** `https://laranepal.com/api/v1/articles`  
**Headers:**

```http
Accept: application/json
```

---

- [🧠 How It Works?](#how-it-works-articles)
- [🔍 Query Parameters](#query-parameters-articles)
- [✅ Example Request](#example-request-articles)
- [🔗 Use Case Example](#use-case-example-articles)

<a name="how-it-works-articles"></a>

### 🧠 How It Works

- Returns a paginated list of 15 articles per page by default.
- Supports filtering by keyword (`search`) and sorting by various fields.
- You can also include author or category relationships.

---

<a name="query-parameters-articles"></a>

### 🔍 Query Parameters

| Parameter     | Type   | Default     | Description                                              |
|--------------|--------|-------------|----------------------------------------------------------|
| `search`     | string | `null`      | Filter articles by title or content.                    |
| `sort_field` | string | `published_at` | Field to sort by. E.g. `title`, `published_at`.         |
| `sort_order` | string | `desc`      | Sorting order: `asc` or `desc`.                         |
| `per_page`   | int    | `15`        | Number of articles per page.                            |
| `page`       | int    | `1`         | Page number to return.                                  |

---

<a name="example-request-articles"></a>

### ✅ Example Request

```http
GET /api/v1/articles?search=laravel&per_page=10&sort_field=title&sort_order=asc
```

---

### ✅ Example Default Response (no query params)

```json
{
  "status": 200,
  "message": "Articles retrieved successfully.",
  "data": [
    {
      "title": "Getting Started with Laravel",
      "slug": "getting-started-with-laravel",
      "image": "http://laranepal.com/storage/articles/thumbnail/...",
      "description": "Learn Laravel with this complete beginner's guide...",
      "published_at": "2025-05-12T00:00:00+00:00",
      "category": {
        "name": "Laravel",
        "slug": "laravel"
      },
      "author": {
        "name": "Dinesh Uprety",
        "username": "laranepal"
      }
    }
  ],
  "meta": {
    "current_page": 1,
    "last_page": 1,
    "per_page": 15,
    "total": 1
  }
}
```

---

<a name="use-case-example-articles"></a>

### 🔗 Use Case Example (Laravel HTTP Client)

```php
use Illuminate\Support\Facades\Http;

$response = Http::acceptJson()->get('https://laranepal.com/api/v1/articles');

$articles = $response->json('data');
```

---

<a name="article-show-api"></a>

## 📄 Show Article

### `GET /articles/{slug}`

Fetch a **single article's full content and details** using the article slug.

---

#### 🧾 Request Details

**Method:** `GET`  
**Endpoint:** `/articles/{slug}`  
**Example:** `/articles/getting-started-with-laravel`

---

### ✅ Example Request

```http
GET /api/v1/articles/getting-started-with-laravel
```

---

### ✅ Example Response

```json
{
  "status": 200,
  "message": "Article retrieved successfully.",
  "data": {
    "title": "Getting Started with Laravel",
    "slug": "getting-started-with-laravel",
    "content": "<p>This is a beginner-friendly Laravel article...</p>",
    "published_at": "2025-05-12T00:00:00+00:00",
    "author": {
      "name": "Dinesh Uprety",
      "username": "laranepal"
    },
    "category": {
      "name": "Laravel",
      "slug": "laravel"
    }
  }
}
```

---

### 🔗 Use Case Example (Laravel HTTP Client)

```php
use Illuminate\Support\Facades\Http;

$slug = 'getting-started-with-laravel';

$response = Http::acceptJson()->get("https://laranepal.com/api/v1/articles/{$slug}");

$article = $response->json('data');
```

---

<p align="center">
  <a href="author">⬅️ Previous: Author API</a> &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="error">Next: Tag API ➡️</a>
</p>
