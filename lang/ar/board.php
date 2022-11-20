<?php

return [

   /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |------------------------------------ا--------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

   "create" => 'انشاء',
   'edit' => "تعديل",
   "delete" => "مسح",


   
   "home" => 'الرئيسية',
   'language' => 'اللغه',
   "my_profile" => "حسابي",
   "sign_out" => "تسجيل الخروج",
   "light" => 'مضيئ',
   'Dark' => "مظلم",
   "system" => "النظام",
   "pages" => "الصفح",
   "inactive" => "غير منشور",

   'thumbnail' => 'الصوره',
   'thumbnail_desc' => "تعيين الصورة المصغرة للفئة. تقبل فقط ملفات الصور * .png و * .jpg و * .jpeg",

   "general" => "عام",
   "save_changes" => "حفظ التغيرات",
   "Cancel" => "الغاء",
   "published" => 'منشور',
   "unpublished" => "غير منشور",

   'category' => [
      'name' => 'التصنيف',
      'title' => 'اسم التصنيف',
      "title_desc" => 'مطلوب اسم وصف ويوصى به ليكون فريدًا.',
      'description' => 'وصف التصنيف',
      "description_desc" => 'ضع وصفا للفئة.',
      'status' => 'الحاله',
      'status_desc' => "قم بتعيين حالة الفئة.",
      'type' => 'الحاله',
      'actions' => 'أجراءات',
      'search'=> "فئة البحث",
      'add' => 'اضافة تصنيف',
   ],

   "subcategory" => [
      'name' => 'التصنيف الفرعي',
      'title' => "اسم التصنيف الفرعي",
      "title_desc" => 'مطلوب اسم وصف ويوصى به ليكون فريدًا.',
      "description_desc" => 'ضع وصفا للفئة.',
      'status_desc' => "قم بتعيين حالة الفئة.",
      'type' => 'الحاله',
      'actions' => 'أجراءات',
      'search'=> "فئة البحث",
      'add' => 'اضافة تصنيف فرعي',

   ],
   "product" => [
      'name' => 'المنتج',
      'title' => 'اسم المنتج',
      "title_desc" => 'مطلوب اسم وصف ويوصى به ليكون فريدًا.',
      'description' => 'وصف المنتج',
      "description_desc" => 'ضع وصفا للفئة.',
      'status' => 'الحاله',
      'status_desc' => "قم بتعيين حالة الفئة.",
      'discount' => 'الخصم',
      'discount_desc' => 'قم بتعيين خصم المنتج.',
      'price' => 'السعر',
      'price_desc' => 'حدد سعر المنتج.',
      'stock' => 'المخزون',
      'stock_desc' => 'قم بتعيين مخزون المنتج.',
      'type' => 'الحاله',
      'actions' => 'أجراءات',
      'search'=> "فئة البحث",
      'add' => 'اضافة منتج',
      'rating' => 'تقييم',
      'gallery' => "المعرض",

   ],

   "attribute" => [
      'name' => 'سمة المنتج',
      'value' => 'قيمو سمة المنتج',
      'title' => 'اسم سمة المنتج',
      "title_desc" => 'ضع اسما مناسبا و يفضل ان يكون فريد',
  
      'actions' => 'أجراءات',
      'search' => "ابحث عن سمة المنتج",
      'add' => 'اضف سمة المنتج',
      
   ],

   "customer" => [
      'name' => 'العملاء',
      'email' => "الايميل",
      'admin' => 'ادمن',
      'user_name' => 'الاسم',
      "title_desc" => 'ضع عنوانا مناسبا و يفضل ان يكون فريد',
      'status_desc' => "Set the category status.",
      'password' => 'باسورد',
      'passwordConfirm' => 'تاكيد الباسورد',
      'type' => 'النوع',
      'actions' => 'أجراءات',
      'search' => "ابحث عن عميي",
      'add' => 'اضف عميل',
      'orders' => "الطلبات",
      'order_no' => "رقم الطلب",
      'order' => [
         'status' => 'حالة الطلب',
         'amount' => 'كمية الطلب',
         'date' => 'ميعاد الطلع'
      ],
      'phone' => 'الهاتف',
   ],

   'partials' => [
      'name' => "الزيادات",
   ],

   'contact' => [
      'name' => 'التواصل',
      'title' => 'عنوان التواصل',
      'description' => 'وصف التواصل',
   ],

   'about' => [
      'name' => 'حول',
      'title' => 'عنوان الحول',
      'description' => 'وصف الحول',
   ],

   'terms' => [
      'name' => 'الشروط',
      'title' => 'اسم الشروط',
      'description' => 'وصف',
   ],

   'blog' => [
      'name' => 'مقالات',
      'search' => 'ابحث عن مقاله',
      'title' => 'اسم المقاله',
      'actions' => 'أجراءات',
      'add' => 'اضف مقاله',
      'body' => 'جسد المقاله'
   ],

   'blog_category' => [
      'name' => 'فئة المدونة',
      'search' => 'ابحث عن فئة المدونة',
      'title' => 'عنوان فئة المدونة',
      'description' => 'فئة المدونة',
      'type' => 'نوع فئة المدونة',
      'status' => 'حالة فئة المدونة',
      'actions' => 'أجراءات',
      'add' => 'اضف فئة المدونة',
      'body' => 'جسد فئة المدونة'
   ],

   'discount' => [
      'name' => 'التخفيض',
      'code' => 'كود التخفيض',
      'discount' => 'التخفيص',
      'add' => 'اضف تخفيض',
      'start_date' => 'بداية المده',
      'end_date' => 'نهاية المده',
      'type' => "النوع",
      'fixed' => 'سعر ثابت',
      'percentage' => 'نسبة مئوية',
      'actions' => 'أجراءات',
   
   ],

   'offer' => [
      'name' => 'العروض',
      'discount' => 'التخفيض',
      'product' => 'المنتج',
      'start_date' => 'بداية المده',
      'end_date' => 'نهاية المده',
      'actions' => 'أجراءات',
      'add' => 'اضف عرض'
   ],

   "product_attribute" => [
      'name' => 'المنتج',
      'title' => 'اسم المنتج',
      "title_desc" => 'مطلوب اسم وصف ويوصى به ليكون فريدًا.',
      'description' => 'وصف المنتج',
      "description_desc" => 'ضع وصفا للفئة.',
      'status' => 'الحاله',
      'status_desc' => "قم بتعيين حالة الفئة.",
      'discount' => 'الخصم',
      'discount_desc' => 'قم بتعيين خصم المنتج.',
      'price' => 'السعر',
      'price_desc' => 'حدد سعر المنتج.',
      'stock' => 'المخزون',
      'stock_desc' => 'قم بتعيين مخزون المنتج.',
      'type' => 'الحاله',
      'actions' => 'أجراءات',
      'search'=> "فئة البحث",
      'add' => 'اضافة منتج',
      'rating' => 'تقييم',
      'gallery' => "المعرض",

   ],

   'role' => [
      'name' => 'الدور ',
      'edit' => 'تعديل الدور ',
      'add' => 'اضافة دور',
      'permissions' => 'الاذونات',
   ],

   'review' => [
      'name' => 'مراجعة المستخدم',
      'body' => 'جسد مراجعة المستخدم',
      'user' => 'المستخدم',
      'rate' => "التقييم",
      'product' => 'المنتج',
      'search' => 'ابحث عن مراجعة المستخدم'
   ],



];
