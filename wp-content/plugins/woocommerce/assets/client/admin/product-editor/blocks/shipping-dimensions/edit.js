"use strict";var __importDefault=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(exports,"__esModule",{value:!0}),exports.Edit=void 0;const block_editor_1=require("@wordpress/block-editor"),data_1=require("@woocommerce/data"),compose_1=require("@wordpress/compose"),core_data_1=require("@wordpress/core-data"),data_2=require("@wordpress/data"),element_1=require("@wordpress/element"),i18n_1=require("@wordpress/i18n"),classnames_1=__importDefault(require("classnames")),components_1=require("@wordpress/components"),use_product_helper_1=require("../../hooks/use-product-helper"),shipping_dimensions_image_1=require("../../components/shipping-dimensions-image"),validation_context_1=require("../../contexts/validation-context");function Edit({clientId:e}){var n,t,o;const i=(0,block_editor_1.useBlockProps)(),[r,l]=(0,core_data_1.useEntityProp)("postType","product","dimensions"),[s,a]=(0,core_data_1.useEntityProp)("postType","product","weight"),[_,m]=(0,element_1.useState)(),{formatNumber:c,parseNumber:d}=(0,use_product_helper_1.useProductHelper)(),{dimensionUnit:u,weightUnit:p}=(0,data_2.useSelect)((e=>{const{getOption:n}=e(data_1.OPTIONS_STORE_NAME);return{dimensionUnit:n("woocommerce_dimension_unit"),weightUnit:n("woocommerce_weight_unit")}}),[]);function h(e,n){return{name:`dimensions.${e}`,value:r?c(String(r[e])):void 0,onChange:n=>l({...null!=r?r:{},[e]:d(n)}),onFocus:()=>m(n),onBlur:()=>m(void 0),suffix:u}}const{ref:g,error:v,validate:w}=(0,validation_context_1.useValidation)(`dimensions_width-${e}`,(async function(){if((null==r?void 0:r.width)&&+r.width<=0)return(0,i18n_1.__)("Width must be greater than zero.","woocommerce")}),[null==r?void 0:r.width]),{ref:f,error:E,validate:b}=(0,validation_context_1.useValidation)(`dimensions_length-${e}`,(async function(){if((null==r?void 0:r.length)&&+r.length<=0)return(0,i18n_1.__)("Length must be greater than zero.","woocommerce")}),[null==r?void 0:r.length]),{ref:I,error:B,validate:C}=(0,validation_context_1.useValidation)(`dimensions_height-${e}`,(async function(){if((null==r?void 0:r.height)&&+r.height<=0)return(0,i18n_1.__)("Height must be greater than zero.","woocommerce")}),[null==r?void 0:r.height]),{ref:x,error:S,validate:q}=(0,validation_context_1.useValidation)(`weight-${e}`,(async function(){if(s&&+s<=0)return(0,i18n_1.__)("Weight must be greater than zero.","woocommerce")}),[s]),N={...h("width","A"),id:(0,compose_1.useInstanceId)(components_1.BaseControl,"product_shipping_dimensions_width"),ref:g,onBlur:w},k={...h("length","B"),id:(0,compose_1.useInstanceId)(components_1.BaseControl,"product_shipping_dimensions_length"),ref:f,onBlur:b},y={...h("height","C"),id:(0,compose_1.useInstanceId)(components_1.BaseControl,"product_shipping_dimensions_height"),ref:I,onBlur:C},P={id:(0,compose_1.useInstanceId)(components_1.BaseControl,"product_shipping_weight"),name:"weight",value:c(String(s)),onChange:e=>a(d(e)),suffix:p,ref:x,onBlur:q};return(0,element_1.createElement)("div",{...i},(0,element_1.createElement)("h4",null,(0,i18n_1.__)("Dimensions","woocommerce")),(0,element_1.createElement)("div",{className:"wp-block-columns"},(0,element_1.createElement)("div",{className:"wp-block-column"},(0,element_1.createElement)(components_1.BaseControl,{id:N.id,label:(0,element_1.createInterpolateElement)((0,i18n_1.__)("Width <Side />","woocommerce"),{Side:(0,element_1.createElement)("span",null,"A")}),className:(0,classnames_1.default)({"has-error":v}),help:v},(0,element_1.createElement)(components_1.__experimentalInputControl,{...N})),(0,element_1.createElement)(components_1.BaseControl,{id:k.id,label:(0,element_1.createInterpolateElement)((0,i18n_1.__)("Length <Side />","woocommerce"),{Side:(0,element_1.createElement)("span",null,"B")}),className:(0,classnames_1.default)({"has-error":E}),help:E},(0,element_1.createElement)(components_1.__experimentalInputControl,{...k})),(0,element_1.createElement)(components_1.BaseControl,{id:y.id,label:(0,element_1.createInterpolateElement)((0,i18n_1.__)("Height <Side />","woocommerce"),{Side:(0,element_1.createElement)("span",null,"C")}),className:(0,classnames_1.default)({"has-error":B}),help:B},(0,element_1.createElement)(components_1.__experimentalInputControl,{...y})),(0,element_1.createElement)(components_1.BaseControl,{id:P.id,label:(0,i18n_1.__)("Weight","woocommerce"),className:(0,classnames_1.default)({"has-error":S}),help:S},(0,element_1.createElement)(components_1.__experimentalInputControl,{...P}))),(0,element_1.createElement)("div",{className:"wp-block-column"},(0,element_1.createElement)(shipping_dimensions_image_1.ShippingDimensionsImage,{highlight:_,className:"wp-block-woocommerce-product-shipping-dimensions-fields__dimensions-image",labels:{A:(null===(n=N.value)||void 0===n?void 0:n.length)?N.value:void 0,B:(null===(t=k.value)||void 0===t?void 0:t.length)?k.value:void 0,C:(null===(o=y.value)||void 0===o?void 0:o.length)?y.value:void 0}}))))}exports.Edit=Edit;