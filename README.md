# api-product
Task 1: Model and Migration
Create a new migration and model for a "Product" with the following fields:

Name (string)

Price (decimal, 8, 2)

Quantity (integer)

Run the migration to create the corresponding database table.

Task 2: Controller and Routes
Create a controller named ProductController with the following actions:

Index: Return a JSON response with a list of all products.

Show: Return a JSON response with details of a specific product.

Define API routes to access the actions created in the ProductController.

Task 3: Database Interaction
Seed the database with sample data for products using Laravel Seeder.

Create a new migration to add a new field, "description," to the "Product" model.

Update the database and the Product model to reflect the changes.

Task 4: Validation
Implement validation for creating a new product through the API:

Name is required and should be unique.

Price is required and should be a valid decimal.

Quantity is required and should be a valid integer.

Return appropriate JSON error responses when validation fails.

Task 5: Relationship
Create a new migration and model for a "Category" with the following fields:

Name (string)

Establish a Many-to-Many relationship between Product and Category. A product can belong to multiple categories, and a category can have multiple products.

Create a migration to create a pivot table for the relationship.
