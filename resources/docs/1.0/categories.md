<a name="category-api"></a>

## 📂 Category

### `GET /categories`

This endpoint returns a **paginated list of content categories** available on the Laranepal platform.

Use this to display all topics (e.g., Laravel, Vue.js, PHP, Tailwind) grouped as categories with associated metadata such as image, description, and slug.

---

#### 🧾 Request Details

**Method:** `GET`  
**Endpoint:** `/categories`  
**Base URL:** `http://laranepal.com/api/v1/categories`  
**Headers:**

```http
Accept: application/json
```

---

- [🧠 How It Works?](#how-it-works)
- [🔍 Query Parameters](#query-parameters)
- [✅ Example Request](#example-request)
- [🔗 Use Case Example](#use-case-example)

<a name="how-it-works"></a>

### 🧠 How It Works

- By default, this API returns a **paginated list of 15 categories per page**.
- If **no query parameters** are provided, it will return the **first page** of categories with default sorting.
- You can override **pagination, sorting, and filtering** behavior using query parameters.

---

<a name="query-parameters"></a>

### 🔍 Query Parameters

| Parameter    | Type   | Default      | Description                                               |
| ------------ | ------ | ------------ | --------------------------------------------------------- |
| `search`     | string | `null`       | Filter categories by partial match in their name or slug. |
| `sort_field` | string | `created_at` | Field to sort by. Supported: `name`, `created_at`, etc.   |
| `sort_order` | string | `desc`       | Sort direction. Options: `asc`, `desc`.                   |
| `per_page`   | int    | `15`         | Number of categories to return per page.                  |
| `page`       | int    | `1`          | Page number to return.                                    |

> 💡 **Note:** All query parameters are optional. You can mix and match to suit your UI or logic needs.

---

<a name="example-request"></a>

### ✅ Example Request

**Fetch categories with 5 per page sorted by name:**

```http
GET /api/v1/categories?per_page=5&sort_field=name&sort_order=asc
```

---

### ✅ Example Default Response (no query params)

```json
{
    "status": 200,
    "message": "Categories retrieved successfully.",
    "data": [
        {
            "name": "CSS",
            "slug": "css",
            "image": "http://laranepal.com/storage/category/thumbnail/...",
            "description": "Style your web journey with CSS...",
            "created_at": "2024-01-26T09:28:35+00:00",
            "updated_at": "2025-05-01T05:03:29+00:00"
        }
    ],
    "meta": {
        "current_page": 1,
        "last_page": 1,
        "per_page": 15,
        "total": 9
    }
}
```

---

<a name="use-case-example"></a>

### 🔗 Use Case Example (Laravel HTTP Client)

```php
use Illuminate\Support\Facades\Http;

$response = Http::acceptJson()->get('http://laranepal.com/api/v1/categories');

$categories = $response->json('data'); // Will return first 15 categories by default
```

---
