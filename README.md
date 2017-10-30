Session Notification CI
=======================
Sekilas bahwa fungsi ini sama dengan flashdata pada codeigniter
namun yang menjadi perbedaannya adalah ketika kita menggunakan flashdata bersamaan dengan menggunakan request ajax secara realtime 
maka flashdata akan terdistroy sebelum ditampilkan, dan itu menjadi masalah yang cukup serius karena tentunya notif itu tidak sampai
pada user. Namun pada fungsi ini notification akan terdestroy manakala sudah ditampilkan.

Cara Penggunaan
=================
Untuk set notification dilakukan dengan cara
```<?php $this->session->set_notification("Pesan yang ditampilkan", "danger|success|warning|info"); ?>```

Untuk menampilkanya dengan cara berikut
```<?php echo $this->session->show_notification(); ?>```

untuk HTML yang di generate menggunakan template bootstrap alert
```<div class="alert alert-danger|success|warning|info">Pesan yang ditampilkan</div>```

