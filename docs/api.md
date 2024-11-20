# Apps Api Reference

## Table of Contents

- [Apps](#apps)
  - [List Apps](#list-apps)
  - [Detail App](#detail-app)
  - [Update App](#update-app)
  - [Delete App](#delete-app)
  - [Create App](#create-app)
  - [Search Apps](#search-apps)
  - [Filter Apps](#filter-apps)
  - [Sort Apps](#sort-apps)
  - [Pagination Apps](#pagination-apps)
  - [Export Apps](#export-apps)
  - [Import Apps](#import-apps)
  - [Install Online](#install-online)

## Apps

### List Apps

#### Request

```http
GET /api/v1/apps
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Response

```json
[
    {
        "id": 1,
        "name": "App Name",
        "description": "App Description",
        "created_at": "2021-01-01 00:00:00",
        "updated_at": "2021-01-01 00:00:00"
    }
]
```

### Detail App

#### Request

```http
GET /api/v1/apps/{id}
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Response

```json
{
    "id": 1,
    "name": "App Name",
    "description": "App Description",
    "created_at": "2021-01-01 00:00:00",
    "updated_at": "2021-01-01 00:00:00"
}
```

### Update App

#### Request

```http
PUT /api/v1/apps/{id}
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Request Body

```json
{
    "name": "App Name",
    "description": "App Description"
}
```

#### Response

```json
{
    "id": 1,
    "name": "App Name",
    "description": "App Description",
    "created_at": "2021-01-01 00:00:00",
    "updated_at": "2021-01-01 00:00:00"
}
```

### Delete App

#### Request

```http
DELETE /api/v1/apps/{id}
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Response

```json
{
    "message": "The app has been deleted."
}
```

### Create App

#### Request

```http
POST /api/v1/apps
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Request Body

```json
{
    "name": "App Name",
    "description": "App Description"
}
```

#### Response

```json
{
    "id": 1,
    "name": "App Name",
    "description": "App Description",
    "created_at": "2021-01-01 00:00:00",
    "updated_at": "2021-01-01 00:00:00"
}
```

### Search Apps

#### Request

```http
GET /api/v1/apps/search?q={query}
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Response

```json
[
    {
        "id": 1,
        "name": "App Name",
        "description": "App Description",
        "created_at": "2021-01-01 00:00:00",
        "updated_at": "2021-01-01 00:00:00"
    }
]
```

### Filter Apps

#### Request

```http
GET /api/v1/apps/filter?{key}={value}
````
#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Response

```json
[
    {
        "id": 1,
        "name": "App Name",
        "description": "App Description",
        "created_at": "2021-01-01 00:00:00",
        "updated_at": "2021-01-01 00:00:00"
    }
]
```

### Sort Apps

#### Request

```http
GET /api/v1/apps/sort?{key}={asc|desc}
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Response

```json
[
    {
        "id": 1,
        "name": "App Name",
        "description": "App Description",
        "created_at": "2021-01-01 00:00:00",
        "updated_at": "2021-01-01 00:00:00"
    }
]
```

### Pagination Apps

#### Request

```http
GET /api/v1/apps/page?page={page}&limit={limit}
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Response

```json
{
    "total": 1,
    "per_page": 10,
    "current_page": 1,
    "last_page": 1,
    "from": 1,
    "to": 1,
    "data": [
        {
            "id": 1,
            "name": "App Name",
            "description": "App Description",
            "created_at": "2021-01-01 00:00:00",
            "updated_at": "2021-01-01 00:00:00"
        }
    ]
}
```

### Export Apps

#### Request

```http
GET /api/v1/apps/export
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Response

```json
{
    "message": "The apps have been exported."
}
```

### Import Apps

#### Request

```http
POST /api/v1/apps/import
```

#### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

#### Request Body

```json
{
    "file": "apps.csv"
}
```

#### Response

```json
{
    "message": "The apps have been imported."
}
```

