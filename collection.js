function start(){
    $('#1').attr("href", "D://Anime/One Piece");
    $('#2').attr("href", "file:///D://Anime/Naruto/");
    $('#3').attr("href", "file:///D://Anime/Black%20Clover/");
    $('#4').attr("href", "file:///D://Anime/Fullmetal%20Alchemist%20Brotherhood/");
    $('#5').attr("href", "file:///D://Anime/Code%20Geass/");
    $('#6').attr("href", "file:///D://Anime/Steins;Gate%20%5BBD%201280x720%20Hi10P%20AAC%20Dual%20Audio%5D/");
    $('#7').attr("href", "file:///D://Anime/Mirai%20Nikki/");
    $('#8').attr("href", "file:///D://Anime/7%20Deadly%20Sins/");
    $('#9').attr("href", "file:///D://Anime/Parasyte%20-%20The%20Maxim%20Complete%20Season%201%20%5BEnG%20SuB%5D%20%5B720p%5D%20L@mBerT/");
    $('#10').attr("href", "file:///D://Anime/One%20Punch%20Man/");
    $('#11').attr("href", "file:///D://Anime/Tokyo%20Ghoul%20Complete%20Season%201%20%5B1-12%5D%20%5BEng%20SuB%5D%20480p%20L@mBerT/");
    $('#12').attr("href", "file:///D://Anime/Your%20Lie%20in%20April/");
    $('#13').attr("href", "file:///D://Anime/Yamada-kun%20and%20the%20Seven%20Witches(Complete)(720p)(Yamada-kun%20to%207-nin%20no%20Majo)%5Bshockya10%5D/");
    $('#14').attr("href", "file:///D://Anime/World%20God%20Only%20Knows/");
    $('#15').attr("href", "file:///D://Anime/Unbreakable%20Machine%20Doll%201-12+SP%20Complete%20(Dual%20Audio)%20%5BBDRip%20720p%208bit%5D/");
    $('#16').attr("href", "file:///D://Anime/This%20Ugly%20Yet%20Beautiful%20World%20Complete%20Series%20(Dual-Audio)/");
    $('#17').attr("href", "file:///D://Anime/The%20Devil%20Is%20a%20Part-Timer!%201-13%20Complete%20(Dual%20Audio)%20%5BBDRip-720p-8bit%5D/");
    $('#18').attr("href", "file:///D://Anime/Sword%20Art%20Online/");
    $('#19').attr("href", "file:///D://Anime/School%20Days/");
    $('#20').attr("href", "file:///D://Anime/Angel%20Beats!%20%5B720p%5D%20%5BSushiKushi%5D/");

    $('#la').attr("src", "icons/la.png");
    $('#ra').attr("src", "icons/ra.png");
}

$('li').hover(function() {
    this.css('background', 'red');
});

window.onload = start;