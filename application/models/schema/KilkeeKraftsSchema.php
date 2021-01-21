<?php
defined('BASEPATH') || exit('No direct script access allowed');

class KilkeeKraftsSchema extends CI_Model
{
	public string $Artist = "Artist";
	public string $Customer = "Customer";
	public string $Orderdetail = "Orderdetail";
	public string $Orders = "Orders";
	public string $Payment = "Payment";
	public string $Product = "Product";
}
class ArtistSchema extends CI_Model
{
	public string $artId = "artId";
	public string $BusinessName = "BusinessName";
	public string $Address = "Address";
	public string $Contact = "Contact";
	public string $Phone = "Phone";
	public string $Photo = "Photo";
}
class CustomerSchema extends CI_Model
{
	public string $Id = "Id";
	public string $LastName = "LastName";
	public string $FirstName = "FirstName";
	public string $PhoneNumber = "PhoneNumber";
	public string $AddressLine1 = "AddressLine1";
	public string $custAddressLine2 = "custAddressLine2";
	public string $custCity = "custCity";
	public string $custPostalCode = "custPostalCode";
	public string $Country = "Country";
	public string $custCreditLimit = "custCreditLimit";
	public string $Email = "Email";
	public string $Password = "Password";
	public string $Password_Hash = "sha256";
}
class OrderdetailSchema extends CI_Model
{
	public string $OrderNumber = "OrderNumber";
	public string $ProductCode = "ProductCode";
	public string $QuantityOrdered = "QuantityOrdered";
	public string $Price = "Price";
}
class OrdersSchema extends CI_Model
{
	public string $OrderNumber = "OrderNumber";
	public string $OrderDate = "OrderDate";
	public string $RequiredDate = "RequiredDate";
	public string $ShippedDate = "ShippedDate";
	public string $Status = "Status";
	public string $Comments = "Comments";
	public string $CustomerNumber = "CustomerNumber";
}
class PaymentSchema extends CI_Model
{
	public string $CustomerNumber = "CustomerNumber";
	public string $CardType = "CardType";
	public string $CardNumber = "CardNumber";
	public string $CardName = "CardName";
	public string $ExpiryDate = "ExpiryDate";
	public string $CVV = "CVV";
	public string $ChequeNumber = "ChequeNumber";
	public string $PaymentDate = "PaymentDate";
	public string $Amount = "Amount";
	public string $OrderNumber = "OrderNumber";
}
class ProductSchema extends CI_Model
{
	public string $Id = "Id";
	public string $Description = "Description";
	public string $Category = "Category";
	public string $Artist = "Artist";
	public string $StockQuantity = "StockQuantity";
	public string $BuyCost = "BuyCost";
	public string $SalePrice = "SalePrice";
	public string $Photo = "Photo";
	public string $PriceDiscounted = "PriceDiscounted";
}
