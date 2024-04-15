<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\BaseService;
use App\Services\Product\ProductServiceInterface;

class ProductService extends BaseService implements ProductServiceInterface{
    public $repository;
    public function __construct(ProductRepositoryInterface $productRepository){
        $this->repository = $productRepository;
    }
    public function find($id){
        $product= $this->repository->find($id);
        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(),'rating'));
        $countrating = count($product->productComments);
        if($countrating!=0){
            $avgRating = $sumRating / $countrating;
        }
        $product->avgRating = $avgRating;
        return $product;
    }
    public function getRelatedProducts($product, $limit = 4){
        return $this->repository->getRelatedProducts($product, $limit);
    }
    public function getFeaturesProducts(){
        return [
            "men"=>$this->repository->getFeaturesProductsByCategory(1),
            'women'=>$this->repository->getFeaturesProductsByCategory(2),  
        ];
    }
}