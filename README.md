# LineBot-Codeigniter3
linebot sdk menggunakan codeigniter3, memudahkan para user codeiginiter

<h1><b>Cara pakai</b></h1>
<p>setting callback line ke http://domain.com/ < root </p>

untuk list function bisa dilihat sendiri di application/third_party/line/LineBot.php (list function) 

untuk mengatur accesstoken edit pada application/third_party/line/Setting.php (line 5)
untuk mengatur channel secret edit pada application/third_party/line/Setting.php (line 9)


contoh callback
<blockquote>
public function index()
		{
			$bot = new Linebot();
			$bot->pushText("U26c6787fa02bd2e1828223978e323cdb", "Salam Dari Codeigniter bro"); 
		}
</blockquote>
atau
<blockquote>
public function index()
		{
			$bot = new Linebot();
			$bot->reply("Hi Bro");
		}
  </blockquote>
