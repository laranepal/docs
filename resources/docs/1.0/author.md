<a name="author-api"></a>

## 📂 Author

### `GET /authors`

This endpoint retrieves a **paginated list of authors** who have contributed content to the Laranepal platform.

Use it to build an author directory, highlight top contributors, or fetch author-specific content such as articles and profile links.

---

#### 🧾 Request Details

**Method:** `GET`  
**Endpoint:** `/authors`  
**Base URL:** `https://laranepal.com/api/v1/authors`  
**Headers:**

```http
Accept: application/json
```

---

- [🧠 How It Works?](#how-it-works-authors)
- [🔍 Query Parameters](#query-parameters-authors)
- [✅ Example Request](#example-request-authors)
- [🔗 Use Case Example](#use-case-example-authors)

<a name="how-it-works-authors"></a>

### 🧠 How It Works

- By default, returns a **paginated list of 15 authors per page**.
- Supports filtering authors by search keyword (e.g., name or username).
- Includes author profile info, article count, and links.

---

<a name="query-parameters-authors"></a>

### 🔍 Query Parameters

| Parameter    | Type   | Default | Description                           |
| ------------ | ------ | ------- | ------------------------------------- |
| `search`     | string | `null`  | Filter authors by name or username.   |
| `sort_field` | string | `null`  | Field to sort by (e.g., `username`).  |
| `sort_order` | string | `asc`   | Sort order: `asc` or `desc`.          |
| `per_page`   | int    | `15`    | Number of authors to return per page. |
| `page`       | int    | `1`     | Page number for pagination.           |

---

<a name="example-request-authors"></a>

### ✅ Example Request

**Search authors by name and sort by username:**

```http
GET /api/v1/authors?search=dinesh&sort_field=username&sort_order=asc
```

---

### ✅ Example Default Response (no query params)

```json
{
    "status": 200,
    "message": "Authors retrieved successfully.",
    "data": [
        {
            "name": "Dinesh Uprety",
            "username": "laranepal",
            "avatar": "http://laranepal.com/storage/author/profile/...",
            "articles_count": 38,
            "github_url": "dineshuprety",
            "x_url": "dineshuprety2",
            "links": {
                "profile": "http://laranepal.com/author/laranepal"
            }
        }
    ],
    "meta": {
        "current_page": 1,
        "last_page": 1,
        "per_page": 15,
        "total": 6
    }
}
```

---

<a name="use-case-example-authors"></a>

### 🔗 Use Case Example (Laravel HTTP Client)

```php
use Illuminate\Support\Facades\Http;

$response = Http::acceptJson()->get('https://laranepal.com/api/v1/authors', [
    'search' => 'dinesh',
    'sort_field' => 'username',
]);

$authors = $response->json('data');
```

---

<p align="center">
  <a href="categories">⬅️ Previous: Category API</a> &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="article">Next: Article API ➡️</a>
</p>
