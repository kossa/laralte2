define({ "api": [
  {
    "type": "get",
    "url": "/categories",
    "title": "Get all categories",
    "description": "<p>Get categories</p>",
    "group": "Categories",
    "version": "0.1.0",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Integer",
            "optional": false,
            "field": "id",
            "description": "<p>Id of category.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Name of category.</p>"
          },
          {
            "group": "Success 200",
            "type": "Integer",
            "optional": false,
            "field": "parent_id",
            "description": "<p>Parent id of category.</p>"
          },
          {
            "group": "Success 200",
            "type": "Timestamp",
            "optional": false,
            "field": "created_at",
            "description": "<p>Created time.</p>"
          },
          {
            "group": "Success 200",
            "type": "Timestamp",
            "optional": false,
            "field": "updated_at",
            "description": "<p>Created time.</p>"
          },
          {
            "group": "Success 200",
            "type": "Category",
            "optional": false,
            "field": "parent",
            "description": "<p>Instance of parent category.</p>"
          }
        ]
      }
    },
    "filename": "app/Http/Controllers/Api/CategoriesController.php",
    "groupTitle": "Categories",
    "name": "GetCategories"
  },
  {
    "type": "get",
    "url": "/categories/:id",
    "title": "Get category details by ID",
    "group": "Categories",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "id",
            "description": "<p>ID of the category.</p>"
          }
        ]
      }
    },
    "version": "0.1.0",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Category",
            "optional": false,
            "field": "Object",
            "description": "<p>Instance of category.</p>"
          }
        ]
      }
    },
    "filename": "app/Http/Controllers/Api/CategoriesController.php",
    "groupTitle": "Categories",
    "name": "GetCategoriesId"
  }
] });
