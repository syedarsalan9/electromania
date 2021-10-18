<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/png" href="{{url('public/logo', $general_setting->site_logo)}}" />
<title>{{$general_setting->site_title}}</title>
</head>

<body>
<table cellpadding="0" cellspacing="0" width="650" align="center" style="font-family: Arial;border: dashed 2px #000;">
    <tr>
        <td>
            <table cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center">
                <tbody>
                    <tr>
                        <td>
                            
                            @if($general_setting->site_logo)
                                <img style="align-content: center;padding-left: 200px;" src="{{url('public/logo', $general_setting->site_logo)}}" height="200" width="200">
                            @endif
                        </td>
                        <td>
                            @if(preg_match('~[0-9]~', url()->previous()))
                                @php $url = '../../pos'; @endphp
                            @else
                                @php $url = url()->previous(); @endphp
                            @endif
                            <table cellpadding="0" cellspacing="0" align="center" style="text-align: center">
                                <tr>
                                </tr>
                                <tr>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr align="center">
                        <td align="center" style="padding: 0px 50px 0 50px;" colspan="3">Shop No 133 3rd Floor Gul Plaza, M.A Jinnah Rd, Gazdarabad Preedy Quarters, Karachi, Sindh 74400</td>
                    </tr>
                    <!-- <tr height="40"></tr> -->
                    <tr>
                        <td colspan="3">
                            <table style="border-top: dashed 2px #000;padding-top: 25px;" cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center">
                                
                                <tbody>
                                <tr>
                                    <td width="55"></td>
                                    <td valign="top">
                                        <table style="margin-bottom: 25px;" cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="top">
                                            <tbody>
                                            <tr>
                                                <td style="font-size: 14px;color: #000">Biller Name:</td>
                                                <td width="5"></td>
                                                <td style="font-size: 14px;color: #000">{{$lims_biller_data->name}}</td>
                                            </tr>
                                            <tr height="5"></tr>
                                            <tr>
                                                <td style="font-size: 14px;color: #000">Date:</td>
                                                <td width="5"></td>
                                                <td style="font-size: 14px;color: #000">
                                                    {{date('Y-m-d',strtotime($lims_sale_data->created_at))}}
                                                </td>
                                            </tr>
                                            <tr height="5"></tr>
                                            <tr>
                                                <td style="font-size: 14px;color: #000">Ref #:</td>
                                                <td width="5"></td>
                                                <td style="font-size: 14px;color: #000">
                                                    {{$lims_sale_data->reference_no}}
                                                </td>
                                            </tr>
                                            <tr height="5"></tr>
                                            <tr>
                                                <td style="font-size: 14px;color: #000">Phone:</td>
                                                <td width="5"></td>
                                                <td style="font-size: 14px;color: #000">{{$lims_biller_data->phone_number}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="55"></td>
                                    <td valign="top">
                                        <table style="margin-bottom: 25px;" cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="top">

                                            <tbody>
                                            <tr>
                                                <td style="font-size: 14px;color: #000">Customer Name:</td>
                                                <td width="5"></td>
                                                <td style="font-size: 14px;color: #000">
                                                    {{$lims_customer_data->name}}
                                                </td>
                                            </tr>
                                            <tr height="5"></tr>
                                            <tr>
                                                <td style="font-size: 14px;color: #000">Customer Number:</td>
                                                <td width="5"></td>
                                                <td style="font-size: 14px;color: #000">{{$lims_customer_data->phone_number}}</td>
                                            </tr>
                                            <tr height="5"></tr>    
                                            <tr>
                                                <td style="font-size: 14px;color: #000">Customer Address:</td>
                                                <td width="5"></td>
                                                <td style="font-size: 14px;color: #000">{{$lims_customer_data->address}}</td>
                                            </tr>
                                            <tr height="5"></tr>    
                                            <tr>
                                                <td style="font-size: 14px;color: #000">NTN Number:</td>
                                                <td width="5"></td>
                                                <td style="font-size: 14px;color: #000">{{$lims_customer_data->tax_no ? $lims_customer_data->tax_no : "N/A"}}</td>
                                            </tr>
                                            <tr height="5"></tr>    
                                            <tr>
                                                <td style="font-size: 14px;color: #000">STRN Number:</td>
                                                <td width="5"></td>
                                                <td style="font-size: 14px;color: #000">{{$lims_customer_data->stnt_number ? $lims_customer_data->stnt_number : "N/A"}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="20"></td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <table style="border-top:dashed 2px #000;" cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center">
                            <tbody>
<!--                             <tr height="40"></tr> -->
                            <tr>
                                <td width="55"></td>
                                <td colspan="4" valign="top">
                                    <table style="" cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center">
                                        <tbody>
                                        <tr>
                                            <td style="font-size: 14px;color: #000;font-weight: bold">S.No</td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000;font-weight: bold">Product</td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000;font-weight: bold">Sku Code</td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000;font-weight: bold">Qty</td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000;font-weight: bold">Unit Price</td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000;font-weight: bold">Sub Total</td>
                                        </tr>
                                        <tr height="10"></tr>
                                        <?php $k = 1;?>
                                        @foreach($lims_product_sale_data as $product_sale_data)
                                        @php 
                                            $lims_product_data = \App\Product::find($product_sale_data->product_id);
                                            if($product_sale_data->variant_id) {
                                                $variant_data = \App\Variant::find($product_sale_data->variant_id);
                                                $product_name = $lims_product_data->name.' ['.$variant_data->name.']';
                                                $sku_code = $lims_product_data->code;
                                            }
                                            else
                                                $sku_code = $lims_product_data->code;
                                                $product_name = $lims_product_data->name;
                                                
                                        @endphp
                                        <tr>
                                            <td style="font-size: 14px;color: #000">{{$k}}</td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000">{{$product_name}}</td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000">{{$sku_code}}</td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000">{{$product_sale_data->qty}}</td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000">
                                                {{number_format((float)($product_sale_data->total / $product_sale_data->qty), 2, '.', '')}}
                                            </td>
                                            <td width="5"></td>
                                            <td style="font-size: 14px;color: #000">
                                                {{number_format((float)$product_sale_data->total, 2, '.', '')}}
                                            </td>
                                        </tr>
                                        <tr height="5"></tr>
                                        <?php $k++;?>
                                        @endforeach
                              
                                        </tbody>
                                    </table>
                                </td>
                                <td width="55"></td>
                            </tr>
                            </tbody>
                        </table>
                    </tr>
<!--                     <tr height="40"></tr> -->
                    <tr>
                        <td>
                            <table cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center" style="border-top:dashed 2px #000;border-bottom:dashed 2px #000;">
                                <tbody>
                                <tr>
                                    <td>
                                        <table style="border-right:dashed 2px #000;" cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center">
                                            <tbody>
                                            <tr height="20"></tr>
                                            <tr height="20"></tr>
                                            <tr>
                                                <td width="55"></td>
                                                <td style="font-size: 14px;color: #000">Total Price:</td>
                                                <td width="40"></td>
                                                <td style="font-size: 14px;color: #000">
                                                    {{number_format((float)$lims_sale_data->total_price, 2, '.', '')}} PKR
                                                </td>
                                            </tr>
                                           
                                            @if($lims_sale_data->order_tax)
                                            <?php
                                            if($lims_sale_data->order_discount){
                                                $remain_price = $lims_sale_data->total_price - $lims_sale_data->order_discount;
                                                
                                                $tax =   (number_format((float)$remain_price, 2, '.', '') * 17) / 100;
                                            }else{
                                                $tax =   (number_format((float)$lims_sale_data->total_price, 2, '.', '') * 17) / 100;
                                            }
                                            ?>  
                                            <tr height="20"></tr>
                                            <tr>
                                                <td width="55"></td>
                                                <td colspan="2">Sale Tax ({{$lims_sale_data->order_tax_rate}}%)</td>
                                                
                                                <td style="font-size: 14px;color: #000">{{number_format((float)$tax, 2, '.', '')}}  PKR</td>
                                            </tr>
                                            @endif
                                            @if($lims_sale_data->order_discount)
                                            <?php
                                         
                                                $differenceCal = $lims_sale_data->total_price - $lims_sale_data->order_discount;
                                                //dd($differenceCal,,$lims_purchase_data->order_discount);
                                                $PercentageAmount = $lims_sale_data->total_price - $differenceCal;
                                                $percent = ($PercentageAmount / $lims_sale_data->total_price) * 100;

                                            ?>
                                            <tr height="20"></tr>
                                            <tr>
                                                <td width="55"></td>
                                                <td style="font-size: 14px;color: #000">{{trans('file.Order Discount')}}</td>
                                                <td width="40"></td>
                                                <td style="font-size: 14px;color: #000">{{number_format((float)$lims_sale_data->order_discount, 2, '.', '')}}  PKR ({{$percent}}%)</td>
                                            </tr>
                                            @endif
                                            @if($lims_sale_data->coupon_discount)
                                            <tr height="20"></tr>
                                            <tr>
                                                <td width="55"></td>
                                                <td style="font-size: 14px;color: #000">{{trans('file.Coupon Discount')}}</td>
                                                <td width="40"></td>
                                                <td style="font-size: 14px;color: #000">{{number_format((float)$lims_sale_data->coupon_discount, 2, '.', '')}}  PKR</td>
                                            </tr>
                                            @endif
                                            @if($lims_sale_data->shipping_cost)
                                            <tr height="20"></tr>
                                            <tr>
                                                <td width="55"></td>
                                                <td style="font-size: 14px;color: #000">{{trans('file.Shipping Cost')}}</td>
                                                <td width="40"></td>
                                                <td style="font-size: 14px;color: #000">{{number_format((float)$lims_sale_data->shipping_cost, 2, '.', '')}}  PKR</td>
                                            </tr>
                                            @endif
                                            <tr height="20"></tr>
                                             <tr>
                                                <td width="55"></td>
                                                <td style="font-size: 14px;color: #000">Total Price:</td>
                                                <td width="40"></td>
                                                <td style="font-size: 14px;color: #000">
                                                    {{number_format((float)$lims_sale_data->grand_total, 2, '.', '')}}  PKR
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
     <!--                <tr height="30"></tr> -->
                    <tr>
                        <td>
                            <table cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center">                                
                                                <thead>
                                                    <th>Paid By:</th>
                                                    <th>Amount:</th>
                                                    <th>Change:</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($lims_payment_data as $payment_data)
                                                    <tr height="20"></tr>
                                                        <tr>
                                                            <td style="text-align: center; font-size: 14px;color: #000">
                                                                {{$payment_data->paying_method ? $payment_data->paying_method : "N/A"}}
                                                            </td>
                                                            <td style="text-align: center;font-size: 14px;color: #000">
                                                                {{number_format((float)$payment_data->amount, 2, '.', '') ? number_format((float)$payment_data->amount, 2, '.', '') : "N/A"}}
                                                            </td>
                                                            <td style="text-align: center;font-size: 14px;color: #000">
                                                                {{number_format((float)$payment_data->change, 2, '.', '') ? number_format((float)$payment_data->change, 2, '.', '') : "N/A"}}
                                                            </td>
                                                        </tr>
                                                    <tr height="20"></tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
<!--                     <tr height="30"></tr> -->
                    <tr height="30"></tr>
                        <tr>
                            <td>
                                <table cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center">
                                    <tbody>
                                       <tr>
                                           <td width="55"></td>
                                           <td>
                                               <table cellpadding="0" bgcolor="" cellspacing="0" width="100%" align="center">
                                                   <tbody>
                                                       <tr><td style="font-size: 14px;color: #000"><a style="text-decoration: none;color: #000" href="https://sharjahguide2.futuristic.agency/terms" target="_blank">Thank you for shopping with us. Please come again</a></td></tr>
                                                       <tr height="10"></tr>
                                                       <tr><td style="font-size: 14px;color: #000"><a style="text-decoration: none;color: #000" href="https://sharjahguide2.futuristic.agency/terms" target="_blank">*Terms and Conditions Apply</a></td></tr>
                                                       <tr height="10"></tr>
                                                       <tr><td style="font-size: 14px;color: #000">For further information please contact Shurooq -</td></tr>
                                                       <tr height="10"></tr>
                                                       <tr><td style="font-size: 14px;color: #000"><a style="text-decoration: none;color: #77bc45" href="#"><img style="width: 20px" src="{{ url('public/images/phone.png') }}"/> 03413131113</a></td></tr>
                                                       <tr height="10"></tr>
                                                       <tr><td style="font-size: 14px;color: #000"><a style="text-decoration: none;color: #77bc45" href="#"><img style="width: 20px" src="{{ url('public/images/email.jpg') }}"/> electromania5172@gmail.com</a></td></tr>
                                                   </tbody>
                                               </table>
                                           </td>
                                       </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    <tr height="30"></tr>
                </tbody>
            </table>
        </td>
    </tr>

</table>
</body>
</html>
