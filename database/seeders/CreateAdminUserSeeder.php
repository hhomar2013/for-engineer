<?php
namespace Database\Seeders;
use App\Models\Admin;
use App\Models\categories;
use App\Models\companies_type;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use function PHPSTORM_META\map;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        companies_type::query()->create([
           'name'=>'حر',
            'status'=>1
        ]);

        //Admin Seeder
         Admin::create([
            'name' => 'OmarMahgoub',
            'email' => 'omar@app.com',
            'password' => bcrypt('123456'),
             'role'=>'0',
             'status'=>0
        ]);

         Admin::create([
            'name' => 'Fares',
            'email' => 'fares@for-engineer.net',
            'password' => bcrypt('123456@For'),
             'role'=>'1',
             'status'=>1
        ]);

         User::create([
            'name' => 'Super Omar Mahgoub',
            'email' => 'user@app.com',
            'password' => bcrypt('123456'),
             'status'=>1
        ]);

        Company::create([
            'name' => 'Company',
            'email' => 'company@app.com',
            'password' => bcrypt('123456'),
            'ct_id'=>1,
            'status'=>0
        ]);

        categories::query()->create([
            'name'=>'أستشارات',
            'status'=>1
        ]);

        categories::query()->create([
            'name'=>'أسشارة فنيه',
            'status'=>1,
            'parent_id'=>1,
            'info'=> '<p>يسعدنا كهيئة إقتصادية أن نوظف إمكانياتنا وصلاحياتنا لخدمة عملاؤنا وشركاؤنا بالداخل والخارج ونقدم باقة مثلى مــن الخـدمات الهندسية واللوجيستية المتكاملة لتخطيط وتصميم وتنفيذ وإدارة المشاريع والكيانات الصناعية والإقتصادية التي تخدم وتدعم خطط الإستثمار وتراعي البعد التنموي والبيئي وتتفق مع الرؤى الحديثة ومعايير الأداء للإقتصاد الأخضر ، وذلك بمقابل تنافسي يعزز فرص التواصل والإستدامة بين الأطراف الأساسية للمشروع :</p><ul><li>الجهة المالكة (العميل).</li><li>الإستشاري (الجهاز التنفيذي).</li><li>جهة التنفيذ (المقاول/المورد/إستشاري المقاول/الجهة البحثية).</li></ul><h3><strong>تصنيفات الخدمة</strong></h3><ul><li>دراسات الجدوى الإقتصادية لمشروعات التشييد الصناعية.</li><li>تحديد الإحتياجات واعداد الدرسات الأولية والحقلية والحقلية(معينات ، رفع مساحي ، جسات ، …) وعناصر وتقسيمات ومراحل المشروع والتكاليف التقديرية والبرنامج الزمني والتمويلي للمشروع.</li><li>دراسات التوسعات ومراحل التطوير للمشروعات وتحليل وتقييم والوضع القائم وتحديث الدراسات السابقة من منظور هندسي إقتصادى وبيئي وتنموي.</li><li>التصميمات الهندسية التفصيلية للمشروعات ومجلدات الكميات والمواصفات والشروط الفنية لتنفيذ الأعمال ، والمجسمات التوضيحية للمشروع.</li><li>إعداد مستندات طرح المناقصات وتقييم العطاءات المقدمة من المقاولين وإختيار أفضلها من النواحي الفنية والمالية ثم الترسية وإعداد مستندات العقود.</li><li>تقديم الدعم الفني والإستشارات بمجال التحكيم فى النزاعات الهندسية.</li><li>خدمات ما بعد التشغيل ) إستشارات فنية – تحسين وتطوير – تسويق ).</li></ul>',

        ]);
        categories::query()->create([
            'name'=>'أسشارة هندسية',
            'status'=>1,
            'parent_id'=>1,
            'info'=> '<p>يسعدنا كهيئة إقتصادية أن نوظف إمكانياتنا وصلاحياتنا لخدمة عملاؤنا وشركاؤنا بالداخل والخارج ونقدم باقة مثلى مــن الخـدمات الهندسية واللوجيستية المتكاملة لتخطيط وتصميم وتنفيذ وإدارة المشاريع والكيانات الصناعية والإقتصادية التي تخدم وتدعم خطط الإستثمار وتراعي البعد التنموي والبيئي وتتفق مع الرؤى الحديثة ومعايير الأداء للإقتصاد الأخضر ، وذلك بمقابل تنافسي يعزز فرص التواصل والإستدامة بين الأطراف الأساسية للمشروع :</p><ul><li>الجهة المالكة (العميل).</li><li>الإستشاري (الجهاز التنفيذي).</li><li>جهة التنفيذ (المقاول/المورد/إستشاري المقاول/الجهة البحثية).</li></ul><h3><strong>تصنيفات الخدمة</strong></h3><ul><li>دراسات الجدوى الإقتصادية لمشروعات التشييد الصناعية.</li><li>تحديد الإحتياجات واعداد الدرسات الأولية والحقلية والحقلية(معينات ، رفع مساحي ، جسات ، …) وعناصر وتقسيمات ومراحل المشروع والتكاليف التقديرية والبرنامج الزمني والتمويلي للمشروع.</li><li>دراسات التوسعات ومراحل التطوير للمشروعات وتحليل وتقييم والوضع القائم وتحديث الدراسات السابقة من منظور هندسي إقتصادى وبيئي وتنموي.</li><li>التصميمات الهندسية التفصيلية للمشروعات ومجلدات الكميات والمواصفات والشروط الفنية لتنفيذ الأعمال ، والمجسمات التوضيحية للمشروع.</li><li>إعداد مستندات طرح المناقصات وتقييم العطاءات المقدمة من المقاولين وإختيار أفضلها من النواحي الفنية والمالية ثم الترسية وإعداد مستندات العقود.</li><li>تقديم الدعم الفني والإستشارات بمجال التحكيم فى النزاعات الهندسية.</li><li>خدمات ما بعد التشغيل ) إستشارات فنية – تحسين وتطوير – تسويق ).</li></ul>',
        ]);

    }
}
