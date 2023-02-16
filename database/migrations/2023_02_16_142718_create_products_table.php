<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('description')->nullable();
            $table->string('website', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('status', 60)->default('published');
            $table->tinyInteger('order')->unsigned()->default(0);
            $table->tinyInteger('is_featured')->unsigned()->default(0);
            $table->timestamps();
        });

        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('parent_id')->unsigned()->default(0);
            $table->mediumText('description')->nullable();
            $table->string('status', 60)->default('published');
            $table->integer('order')->unsigned()->default(0);
            $table->string('image', 255)->nullable();
            $table->tinyInteger('is_featured')->unsigned()->default(0);
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('status', 60)->default('published');
            $table->text('images')->nullable();
            $table->string('sku')->nullable();
            $table->integer('order')->unsigned()->default(0);
            $table->integer('quantity')->unsigned()->nullable();
            $table->tinyInteger('type')->default(0);
            $table->tinyInteger('is_featured')->unsigned()->default(0);
            $table->text('nutritional')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('standard_id')->unsigned()->nullable();
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('tracking_id')->unsigned()->nullable();
            $table->tinyInteger('sale_type')->default(0);
            $table->double('price')->unsigned()->nullable();
            $table->double('sale_price')->unsigned()->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->integer('unit')->unsigned()->nullable();
            $table->float('length')->nullable();
            $table->float('wide')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->string('barcode')->nullable();
            $table->string('length_unit', 20)->nullable();
            $table->string('wide_unit', 20)->nullable();
            $table->string('height_unit', 20)->nullable();
            $table->string('weight_unit', 20)->nullable();
            $table->integer('tax_id')->unsigned()->nullable();
            $table->bigInteger('views')->default(0);
            $table->timestamps();
        });

        Schema::create('product_category_product', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
        });

        Schema::create('product_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('description', 400)->nullable();
            $table->string('status', 60)->default('published');
            $table->timestamps();
        });

        Schema::create('product_tag_product', function (Blueprint $table) {
            $table->integer('product_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index();

            $table->primary(['product_id', 'tag_id']);
        });

        Schema::create('standards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->text('image')->nullable();
            $table->string('description', 400)->nullable();
            $table->string('status', 60)->default('published');
            $table->timestamps();
        });

        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->integer('brand_id')->unsigned()->index();
            $table->string('description', 400)->nullable();
            $table->string('status', 60)->default('published');
            $table->timestamps();
        });

        Schema::create('nutritionals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('description', 400)->nullable();
            $table->string('status', 60)->default('published');
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->float('star');
            $table->string('comment');
            $table->string('status', 60)->default('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('brands');
        Schema::dropIfExists('product_categories');
        Schema::dropIfExists('product_category_product');
        Schema::dropIfExists('product_tags');
        Schema::dropIfExists('product_tag_product');
        Schema::dropIfExists('trackings');
        Schema::dropIfExists('standards');
        Schema::dropIfExists('nutritionals');
        Schema::dropIfExists('reviews');
    }
}
