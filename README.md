`php artisan migrate --seed`

Data in tables:
[<img src="https://i.ibb.co/dcJHSQ4/products.png">](https://i.ibb.co/dcJHSQ4/products.png)
[<img src="https://i.ibb.co/nfQ4k0F/comments.png">](https://i.ibb.co/nfQ4k0F/comments.png)

`php artisan test-count`

Result
```php
Illuminate\Database\Eloquent\Collection^ {#1664
  #items: array:4 [
    0 => App\Models\Product^ {#1414
      #connection: "mysql"
      #table: "products"
      #primaryKey: "id"
      #keyType: "int"
      +incrementing: true
      #with: []
      #withCount: []
      #perPage: 15
      +exists: true
      +wasRecentlyCreated: false
      #attributes: array:5 [
        "id" => 1
        "name" => "Odie Barrows"
        "created_at" => "2020-11-02 10:58:56"
        "updated_at" => "2020-11-02 10:58:56"
        "comments_count" => 2
      ]
      #original: array:5 [
        "id" => 1
        "name" => "Odie Barrows"
        "created_at" => "2020-11-02 10:58:56"
        "updated_at" => "2020-11-02 10:58:56"
        "comments_count" => 2
      ]
      #changes: []
      #casts: []
      #classCastCache: []
      #dates: []
      #dateFormat: null
      #appends: []
      #dispatchesEvents: []
      #observables: []
      #relations: []
      #touches: []
      +timestamps: true
      #hidden: []
      #visible: []
      #fillable: []
      #guarded: array:1 [
        0 => "*"
      ]
    }
    1 => App\Models\Product^ {#1662
      #connection: "mysql"
      #table: "products"
      #primaryKey: "id"
      #keyType: "int"
      +incrementing: true
      #with: []
      #withCount: []
      #perPage: 15
      +exists: true
      +wasRecentlyCreated: false
      #attributes: array:5 [
        "id" => 2
        "name" => "Mrs. Fae McDermott Sr."
        "created_at" => "2020-11-02 10:58:56"
        "updated_at" => "2020-11-02 10:58:56"
        "comments_count" => 2
      ]
      #original: array:5 [
        "id" => 2
        "name" => "Mrs. Fae McDermott Sr."
        "created_at" => "2020-11-02 10:58:56"
        "updated_at" => "2020-11-02 10:58:56"
        "comments_count" => 2
      ]
      #changes: []
      #casts: []
      #classCastCache: []
      #dates: []
      #dateFormat: null
      #appends: []
      #dispatchesEvents: []
      #observables: []
      #relations: []
      #touches: []
      +timestamps: true
      #hidden: []
      #visible: []
      #fillable: []
      #guarded: array:1 [
        0 => "*"
      ]
    }
    2 => App\Models\Product^ {#1663
      #connection: "mysql"
      #table: "products"
      #primaryKey: "id"
      #keyType: "int"
      +incrementing: true
      #with: []
      #withCount: []
      #perPage: 15
      +exists: true
      +wasRecentlyCreated: false
      #attributes: array:5 [
        "id" => 3
        "name" => "Prof. Zoey Waters Sr."
        "created_at" => "2020-11-02 10:58:56"
        "updated_at" => "2020-11-02 10:58:56"
        "comments_count" => 0
      ]
      #original: array:5 [
        "id" => 3
        "name" => "Prof. Zoey Waters Sr."
        "created_at" => "2020-11-02 10:58:56"
        "updated_at" => "2020-11-02 10:58:56"
        "comments_count" => 0
      ]
      #changes: []
      #casts: []
      #classCastCache: []
      #dates: []
      #dateFormat: null
      #appends: []
      #dispatchesEvents: []
      #observables: []
      #relations: []
      #touches: []
      +timestamps: true
      #hidden: []
      #visible: []
      #fillable: []
      #guarded: array:1 [
        0 => "*"
      ]
    }
    3 => App\Models\Product^ {#1046
      #connection: "mysql"
      #table: "products"
      #primaryKey: "id"
      #keyType: "int"
      +incrementing: true
      #with: []
      #withCount: []
      #perPage: 15
      +exists: true
      +wasRecentlyCreated: false
      #attributes: array:5 [
        "id" => 4
        "name" => "Mrs. Roberta Rodriguez"
        "created_at" => "2020-11-02 10:58:56"
        "updated_at" => "2020-11-02 10:58:56"
        "comments_count" => 0
      ]
      #original: array:5 [
        "id" => 4
        "name" => "Mrs. Roberta Rodriguez"
        "created_at" => "2020-11-02 10:58:56"
        "updated_at" => "2020-11-02 10:58:56"
        "comments_count" => 0
      ]
      #changes: []
      #casts: []
      #classCastCache: []
      #dates: []
      #dateFormat: null
      #appends: []
      #dispatchesEvents: []
      #observables: []
      #relations: []
      #touches: []
      +timestamps: true
      #hidden: []
      #visible: []
      #fillable: []
      #guarded: array:1 [
        0 => "*"
      ]
    }
  ]
}
"select `products`.*, (select count(*) from `comments` where `products`.`id` = `comments`.`commentable_id` and `comments`.`commentable_type` = ? and `confirmed_at` is not null limit 1) as `comments_count` from `products` where `id` in (?, ?, ?, ?)"
```
