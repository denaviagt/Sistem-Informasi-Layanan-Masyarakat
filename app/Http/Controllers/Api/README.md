# API Spesification

Online API Spesification: https://esilam.docs.apiary.io/

## Login
- Method: POST
- endpoint: /users/login
- Request:
    - Header
        - Accept: Content-Type
        - Content-Type: application/x-www-form-urlencoded
    - Parameter:
        - phone_number (number/string)
        - password (string)

Response:
- Success
```json
{
  "success": true,
  "status_code": 200,
  "message": "Successfully Logged In!",
  "data": {
    "user_id": 0,
    "firstname": "First",
    "lastname": "Last",
    "phone_number": "081321421521",
    "profile_picture": "https:bavnanv.com/aonfao.png",
    "profile_thumbnile": "https:bavnanv.com/aonfao_thumb.png"
  }
}
```

## List info kalurahan
- Method: GET
- endpoint: villages/info
- Request:
    - Header
        - Accept: Content-Type
        
Response:
- Success
```json
{
  "success": true,
  "status_code": 200,
  "message": "List info kalurahan!",
  "data": [
    {
        "id": 0,
        "title": "Perayaan bersih desa",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "date": "18/11/2020"
    },
    {
        "id": 1,
        "title": "Perayaan bersih desa",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "date": "18/11/2020"
    }
  ]
}
```

## List potensi kalurahan
- Method: GET
- endpoint: /kalurahan/potentials
- Request:
    - Header
        - Accept: Content-Type
        
Response:
- Success
```json
{
  "success": true,
  "status_code": 200,
  "message": "List potensi kalurahan!",
  "data": [
    {
        "id": 0,
        "title": "Bumdes Jogotirto",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "url": "https:jogotirto.id/potensi/bumdes-jogotirto"
    },
    {
        "id": 1,
        "title": "Karang Taruna",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "url": "https:jogotirto.id/potensi/karang-taruna"
    },
    {
        "id": 2,
        "title": "Desa Wisata",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "url": "https:jogotirto.id/potensi/desa-wisata"
    },
    {
        "id": 3,
        "title": "Desa Wisata",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "url": "https:jogotirto.id/potensi/desa-wisata"
    }
  ]
}
```

## List layanan
- Method: GET
- endpoint: /services
- Request:
    - Header
        - Accept: Content-Type
        
Response:
- Success
```json
{
  "success": true,
  "status_code": 200,
  "message": "List layanan!",
  "data": [
    {
        "id": 0,
        "title": "Layanan A",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png"
    }
  ]
}
```

## Detail layanan
- Method: GET
- endpoint: /services/{services_id}
- Request:
    - Header
        - Accept: Content-Type
        
Response:
- Success
```json
{
  "success": true,
  "status_code": 200,
  "message": "Detail layanan A!",
  "data": 
    {
        "id": 0,
        "title": "Layanan A",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "syarat": [],
        "prosedur": []
    }
}
```

## Ajukan layanan
- Method: POST
- endpoint: /services/{services_id}/submit
- Request:
    - Header
        - Accept: Content-Type
    - Parameter:
        - penduduk_id
        - berkas
        
Response:
- Success
```json
{
  "success": true,
  "status_code": 200,
  "message": "Success mengajukan layanan!",
  "data": 
    {
        "id": 0,
        "title": "Layanan A",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "syarat": [],
        "prosedur": []
    }
}
```

## Submit Aduan
- Method: POST
- endpoint: /feedback
- Request:
    - Header
        - Accept: Content-Type
    - Parameter:
        - nama
        - aduan
        - date
        - lokasi
        - is_anonim (boolean)
        
Response:
- Success
```json
{
  "success": true,
  "status_code": 201,
  "message": "Success Membuat Feedback!"
}
```

## List permohonan
- Method: GET
- endpoint: /permohonan
- Request:
    - Header
        - Accept: Content-Type
    - Parameter
        - user_id
        
Response:
- Success
```json
{
  "success": true,
  "status_code": 200,
  "message": "Successfully Logged In!",
  "data": [
    {
        "id": 0,
        "title_layanan": "Layanan A",
        "user": {
            "user_id": 0,
            "firstname": "First",
            "lastname": "Last",
            "phone_number": "081321421521",
            "profile_picture": "https:bavnanv.com/aonfao.png",
            "profile_thumbnile": "https:bavnanv.com/aonfao_thumb.png"
        },
        "status": "Gagal",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "url": "https:jogotirto.id/potensi/bumdes-jogotirto"
    },
    {
        "id": 1,
        "title_layanan": "Layanan A",
        "user": {
            "user_id": 0,
            "firstname": "First",
            "lastname": "Last",
            "phone_number": "081321421521",
            "profile_picture": "https:bavnanv.com/aonfao.png",
            "profile_thumbnile": "https:bavnanv.com/aonfao_thumb.png"
        },
        "status": "Gagal",
        "thumbnail": "https:bavnanv.com/aonfao_thumb.png",
        "url": "https:jogotirto.id/potensi/bumdes-jogotirto"
    }
  ]
}
```
