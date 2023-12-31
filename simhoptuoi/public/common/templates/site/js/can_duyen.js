//
// Căn Duyên Tiền Định
// Xem về Hôn Nhân
//

function canDuyen(can, chi)
{
  var s;
  switch(can) {
  case 0: // Giáp
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Giáp cưới vợ tuổi Tý: vợ chồng đặng điều hòa, ăn ở cùng nhau như cặp chim cưu, ";
      s+="con trống kêu một tiếng thì con mái kêu theo rập ràng. "
      s+="Ví như bà Thái Tỷ vợ của Châu Văn Vương."; break;
    case 1: // Sửu
      s="Chồng tuổi can Giáp cưới vợ tuổi Sửu: dầu có công danh cũng lận đận, không bền, "
      s+="và người vợ thường bị sản nạn. Có con không nhờ, e rằng người vợ sẽ chết trước."; break;
    case 2: // Dần
      s="Chồng tuổi can Giáp cưới vợ tuổi Dần: dầu có công danh cũng lận đận, không bền, "
      s+="và người vợ thường bị sản nạn. Có con không nhờ, e rằng người vợ sẽ chết trước."; break;
    case 3: // Mão
      s="Chồng tuổi can Giáp cưới vợ tuổi Mão: Cũng như thuyền trôi ngược, như lá vàng sắp gặp tiết thu sang úa rụng. "
      s+="E rằng người chồng sẽ chết trước. Nên ở cho có đạo nghĩa mới bền. "
      s+="Vì có câu: 'Nhân từ giã thọ, hung bạo giã vong'."; break;
    case 4: // Thìn
      s="Chồng tuổi can Giáp cưới vợ tuổi Thìn: dầu có tiền của cũng khi hiệp khi tan, như hoa nở rồi lại héo. "
      s+="Người vợ bệnh hoạn liên miên. Phải lấy đức mới ăn ở đời được."; break;
    case 5: // Tỵ
      s="Chồng tuổi can Giáp cưới vợ tuổi Tỵ: cũng như người đi trễ xe, tính một đường mà làm một nẻo. "
      s+="Làm ăn khi thành khi bại, về sau e người vợ sẽ chết trước. "
      s+="Nhưng đức hạnh thì 40 tuổi sẽ phát đạt thịnh vượng."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Giáp cưới vợ tuổi Ngọ: sinh con nhưng khó nuôi con được vẹn toàn. "
      s+="Người chồng phải có vợ lẻ mới được yên vui."; break;
    case 7: // Mùi
      s="Chồng tuổi can Giáp cưới vợ tuổi Mùi: thường bị phá sản, vợ chồng cắn đắng không thuận hòa, "
      s+="khi thì vui vẻ, khi tan nát lòng, khi ăn chẳng hết, khi bòn chẳng ra."; break;
    case 8: // Thân
      s="Chồng tuổi can Giáp cưới vợ tuổi Thân: thường hay cãi vả, ít được đầm ấm. "
      s+="Dời đổi chỗ ăn ở đôi ba lần mới yên. "
      s+="Tuy hay cãi vả, nhưng chung sống với nhau đến ngày răng long tóc bạc."; break;
    case 9: // Dậu
      s="Chồng tuổi can Giáp cưới vợ tuổi Dậu: rất tốt, cũng như Vương Bội lúc thơ sanh đã vào nơi Đằng Vương Các, "
      s+="khoa danh rạng rỡ. Con cháu vui vẻ, sum vầy."; break;
    case 10: // Tuất
      s="Chồng tuổi can Giáp cưới vợ tuổi Tuất: rất tốt, cũng như Vương Bội lúc thơ sanh đã vào nơi Đằng Vương Các, "
      s+="khoa danh rạng rỡ. Con cháu sum vầy."; break;
    case 11: // Hợi
      s="Chồng tuổi can Giáp cưới vợ tuổi Hợi: tuy tâm đầu ý hiệp nhưng người vợ thường hay bệnh hoạn; "
      s+="dẫu có công danh rạng rỡ, song e gặp bước thăng trầm không lường được. "
      s+="Nên ăn ở cho có âm đức thì sẽ khá."; break;
    } break;
  case 1: // Ất
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Ất cưới vợ tuổi Tý: vợ chồng phù hợp xứng lứa vừa đôi, an vui, có con, có của, "
      s+="gia đình vinh hiển."; break; 
    case 1: // Sửu
      s="Chồng tuổi can Ất cưới vợ tuổi Sửu: rất tốt, cũng như trăng thu tỏ rạng. "
      s+="Phú quý giàu sang, sanh trai đầu lòng thì tốt hơn sanh gái. "
      s+="Vợ chồng chung sống đến chuỗi ngày răng long tóc bạc."; break;
    case 2: // Dần
      s="Chồng tuổi can Ất cưới vợ tuổi Dần: rất tốt, cũng như trăng thu tỏ rạng. "
      s+="Phú quý giàu sang, sanh trai đầu lòng thì tốt hơn sanh gái. "
      s+="Vợ chồng chung sống đến chuỗi ngày răng long tóc bạc."; break;
    case 3: // Mão
      s="Chồng tuổi can Ất cưới vợ tuổi Mão: vợ chồng thường ăn ở bất hòa, khi hiệp khi tan. "
      s+="Có những lúc buồn sa nước mắt, có những hồi son sắt yêu đương."; break;
    case 4: // Thìn
      s="Chồng tuổi can Ất cưới vợ tuổi Thìn: rất tốt, cũng như Lưu Lang vào động Thiên Thai gặp vợ tiên. "
      s+="Hay như Vương Song Phước gặp nàng Huệ Khôi trăm năm gắn bó."; break;
    case 5: // Tỵ
      s="Chồng tuổi can Ất cưới vợ tuổi Tỵ: rất tốt, cũng như Lưu Lang vào động Thiên Thai gặp vợ tiên. "
      s+="Hay như Vương Song Phước gặp nàng Huệ Khôi trăm năm gắn bó."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Ất cưới vợ tuổi Ngọ: cũng như đi đêm mà gặp lúc trăng mờ. Cơ nghiệp sụp đổ, công danh lỡ dở. "
      s+="Không xa nhau cũng có kẻ còn người mất."; break;
    case 7: // Mùi
      s="Chồng tuổi can Ất cưới vợ tuổi Mùi: rất tốt, cũng như cá ở Long môn hóa rồng. "
      s+="Sanh con đặng khoa danh rạng rỡ; vinh hiển mãi đến mai sau."; break;
    case 8: // Thân
      s="Chồng tuổi can Ất cưới vợ tuổi Thân: vợ chồng rất toại nguyện, danh phận rỡ ràng. Tuy có người ganh tỵ, "
      s+="nhưng cũng được bình an. Sanh con cái tuy có tài hay, song thường trắc trở khoa danh. "
      s+="Vợ chồng hay tranh cãi, nhưng chung sống đến già."; break;
    case 9: // Dậu
      s="Chồng tuổi can Ất cưới vợ tuổi Dậu: cũng như thuyền đi ngược gió, tuy làm ăn cố gắng song không có kết quả, "
      s+="chừng nửa đời chồng vợ sẽ ra cảnh phân ly."; break;
    case 10: // Tuất
      s="Chồng tuổi can Ất cưới vợ tuổi Tuất: làm ăn rất vất vả, công danh chẳng toại. "
      s+="Nửa chừng người vợ sẽ chết trước."; break;
    case 11: // Hợi
      s="Chồng tuổi can Ất cưới vợ tuổi Hợi: làm ăn rất vất vả, công danh chẳng toại. "
      s+="Nửa chừng người vợ sẽ chết trước."; break;
    } break;
  case 2: // Bính 
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Bính cưới vợ tuổi Tý: vợ chồng ăn ở mặc dầu có con cái, dù yêu thương nồng nhiệt, "
      s+="nhưng người vợ sẽ chết trước."; break;
    case 1: // Sửu
      s="Chồng tuổi can Bính cưới vợ tuổi Sửu: vợ chồng làm ăn được khá giả, hết cơn bỉ cực đến hồi vinh sang. "
      s+="Phải có con đỡ đầu mới khá. E rằng người vợ phải mang bệnh tật, và dời đổi chổ ở đôi ba nơi mới yên. "
      s+="Nên tu thân tích đức mới được trường thọ."; break;
    case 2: // Dần
      s="Chồng tuổi can Bính cưới vợ tuổi Dần: vợ chồng lúc đầu ăn ở đầm ấm, e rằng sau phải phân ly. "
      s+="Nên tu thân tích đức mới được trường thọ."; break;
    case 3: // Mão
      s="Chồng tuổi can Bính cưới vợ tuổi Mão: chẳng khác nào chim mắc bẫy, én lạc đàn, "
      s+="ghe cạn nước và phải chia lìa trong lúc nửa đời. Chồng chết trước vợ."; break;
    case 4: // Thìn
      s="Chồng tuổi can Bính cưới vợ tuổi Thìn: chẳng khác nào chim mắc bẫy, én lạc đàn, "
      s+="ghe cạn nước và phải chia lìa trong lúc nửa đời. Chồng chết trước vợ."; break;
    case 5: // Tỵ
      s="Chồng tuổi can Bính cưới vợ tuổi Tỵ: rất tâm đầu ý hiệp, có tiền của khá giả, sanh con cái đều đủ, "
      s+="hưởng phúc thanh nhàn, sống lâu."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Bính cưới vợ tuổi Ngọ: chẳng khác gì cây gặp mùa Xuân, đâm chồi mọc rể. "
      s+="Sanh con cái đều đủ gái trai, nhưng số nửa chừng thì chồng chết trước"; break;
    case 7: // Mùi
      s="Chồng tuổi can Bính cưới vợ tuổi Mùi: cũng như cây gặp đất tốt nẩy chồi. "
      s+="Làm ăn thịnh phát, của cải rất giàu sang. Vợ chồng thường tranh cãi, "
      s+="nhưng vẫn chung sống đến già."; break;
    case 8: // Thân
      s="Chồng tuổi can Bính cưới vợ tuổi Thân: vợ chồng buổi đầu keo sơn gắn bó, "
      s+="nhưng nửa chừng lại bình vỡ gương tan. Âu cũng là tiền nhân hậu quả, "
      s+="việc trả nợ ái ân tái hôn đời sau thì mới được đầm ấm và sang giàu."; break;
    case 9: // Dậu
      s="Chồng tuổi can Bính cưới vợ tuổi Dậu: cũng như chim én lạc bầy. Đường công danh trắc trở. "
      s+="Cảnh gia đình suy sụp. Không sanh được con trai, vợ chồng buồn phiền, "
      s+="anh em lãnh đạm. Nên ăn ở có đạo đức mới khá."; break;
    case 10: // Tuất
      s="Chồng tuổi can Bính cưới vợ tuổi Tuất: cũng như chim én lạc bầy. Đường công danh trắc trở. "
      s+="Cảnh gia đình suy sụp. Không sanh được con trai, vợ chồng hay buồn phiền, "
      s+="anh em lãnh đạm. Nên ăn ở có đạo đức mới khá."; break;
    case 11: // Hợi
      s="Chồng tuổi can Bính cưới vợ tuổi Hợi: trước tiên phải chịu cảnh cơ hàn, sau mới khá giả, yên vui; "
      s+="con cháu đông đủ. Phải bền chí và cố gắng thì sau mới vinh hiển."; break;
    } break;
  case 3: // Đinh 
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Đinh cưới vợ tuổi Tý: lúc đầu cực khổ nghèo thiếu, chừng gần 30 tuổi sẽ phát đạt, "
      s+="giàu sang. Con cái sum vầy nên danh phận. Nên ăn ở có âm đức mới được khá."; break;
    case 1: // Sửu
      s="Chồng tuổi can Đinh cưới vợ tuổi Sửu: lúc đầu sống cực khổ nghèo thiếu, đến 30 tuổi sẽ phát đạt, "
      s+="giàu sang. Con cái sum vầy nên danh phận. Nên ăn ở cho có âm đức mới được khá."; break;
    case 2: // Dần
      s="Chồng tuổi can Đinh cưới vợ tuổi Dần: vợ chồng lúc đầu thì vui vẻ, yêu thương, nhưng sau vì "
      s+="hoàn cảnh có lúc phải phân ly nhau, khi tan khi hợp, bằng không thì người vợ phải chết trước. "
      s+="Nên ăn ở có âm đức, tu hành thì đặng sống lâu."; break;
    case 3: // Mão
      s="Chồng tuổi can Đinh cưới vợ tuổi Mão: cũng như sự tích 'Bùi Hàng' gặp vợ tiên là nàng 'Vân Anh', "
      s+="kết thành lứa đôi. Trăm năm duyên nợ thề nguyền, càng vui càng thắm, càng nồng tình yêu. "
      s+="Sớm sanh trai gái nối dòng, cũng như xuân đến đượm nhuần hoa tươi."; break;
    case 4: // Thìn
      s="Chồng tuổi can Đinh cưới vợ tuổi Thìn: rất tốt. Cũng như đôi chim nhạn đủ cặp trong tiết Thu sang. "
      s+="Từ đời son trẻ đến ngày tóc bạc, đạo vợ chồng son sắt thủy chung. Trăm năm giữ vững đạo hằng, "
      s+="Như chim liền cánh, như cây giao cành!"; break;
    case 5: // Tỵ
      s="Chồng tuổi can Đinh cưới vợ tuổi Tỵ: rất tốt. Có con cái và công danh rạng rỡ, "
      s+="vợ chồng chung hưởng tài lộc đến già. Những khi dạo cảnh đêm dài, "
      s+="yêu nhau đôi lứa nhìn trăng mỉm cười."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Đinh cưới vợ tuổi Ngọ: rất tốt. Từ tuổi xanh cho đến niên cao, "
      s+="Vợ chồng hòa thuận, cháu con sum vầy."; break;
    case 7: // Mùi
      s="Chồng tuổi can Đinh cưới vợ tuổi Mùi: vợ chồng có lúc phân ly, "
      s+="sau rồi hiệp hòa do hoàn cảnh gây nên."; break;
    case 8: // Thân
      s="Chồng tuổi can Đinh cưới vợ tuổi Thân: Rất tốt. Người chồng có công danh sáng lạng, làm rực rỡ gia môn. "
      s+="Từ tuổi trẻ đến già, vợ chồng được chung hưởng phú quí."; break;
    case 9: // Dậu
      s="Chồng tuổi can Đinh cưới vợ tuổi Dậu: vợ chồng lúc đầu làm ăn có thành có bại, "
      s+="nhưng nên kiên tâm trì đến 30 tuổi sẽ phát đạt giàu sang. "
      s+="Vợ chồng chung sống đến già, và có con cháu đông."; break;
    case 10: // Tuất
      s="Chồng tuổi can Đinh cưới vợ tuổi Tuất: vợ chồng lúc đầu làm ăn có thành có bại, "
      s+="nhưng nên kiên tâm trì đến 30 tuổi sẽ phát đạt giàu sang. "
      s+="Vợ chồng chung sống đến già, và có con cháu đông."; break;
    case 11: // Hợi
      s="Chồng tuổi can Đinh cưới vợ tuổi Hợi: rất phù hợp, như cá gặp nước. "
      s+="Công danh sáng lạng, lắm của nhiều con nhiều cháu."; break;
    } break;
  case 4: // Mậu 
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Mậu cưới vợ tuổi Tý: rất tốt, cũng như vườn xuân hoa nở. "
      s+="Trăm năm gắn bó mối tâm đồng, sanh con trai gái vẹn toàn, gia đình hưng thịnh. "
      s+="Vợ chồng chung sống đến già, an nhàn phú quý."; break;
    case 1: // Sửu
      s="Chồng tuổi can Mậu cưới vợ tuổi Sửu: vợ chồng hay tranh cãi, cuộc làm ăn thường trở ngại; "
      s+="có lúc sống yên ổn, có lúc trong cơn nghèo khổ. Tuy vậy cũng chung sống đến tuổi già."; break;
    case 2: // Dần
      s="Chồng tuổi can Mậu cưới vợ tuổi Sửu: vợ chồng hay tranh cãi, cuộc làm ăn thường trở ngại; "
      s+="có lúc sống yên ổn, có lúc trong cơn nghèo khổ. Tuy vậy cũng chung sống đến tuổi già."; break;
    case 3: // Mão
      s="Chồng tuổi can Mậu cưới vợ tuổi Mão: rất xấu. vợ chồng làm ăn thất bại nhiều phen, "
      s+="lắm khi gian nan cực khổ do nợ trái oan; dời đổi chỗ ở đôi ba lần mới yên. "
      s+="Chung cuộc gia đình được khá giả. Chí công mài sắt, có ngày nên kim."; break;
    case 4: // Thìn
      s="Chồng tuổi can Mậu cưới vợ tuổi Thìn: lúc đầu vui vẻ, sau lại hay buồn phiền. "
      s+="Có lúc nhục, có lúc vinh. Nên ăn ở cho có âm đức về sau sẽ khá."; break;
    case 5: // Tỵ
      s="Chồng tuổi can Mậu cưới vợ tuổi Tỵ: trước vinh hiển, sau chịu cơ hàn. "
      s+="Nên tu thân mới yên lúc tuổi già, được trường thọ. Có con gái khó cậy nhờ. "
      s+="Có con thì không có của, có của thì lại không có con."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Mậu cưới vợ tuổi Ngọ: rất tốt. Vợ chồng hòa thuận từ lúc tuổi xanh đến ngày đầu bạc. "
      s+="Hưởng được thanh nhàn. Sanh gái nhiều hơn trai. Tuổi già lại được nhờ con."; break;
    case 7: // Mùi
      s="Chồng tuổi can Mậu cưới vợ tuổi Mùi: là duyên trời định. Vợ chồng hòa thuận từ lúc xuân xanh cho "
      s+="đến tuổi trăng tàn bóng xế, ân ái mặn nồng, tiền bạc dư giả, "
      s+="sanh con trai và con gái nên danh phận."; break;
    case 8: // Thân
      s="Chồng tuổi can Mậu cưới vợ tuổi Thân: là duyên trời định. Vợ chồng hòa thuận từ lúc xuân xanh cho "
      s+="đến tuổi trăng tàn bóng xế, ân ái mặn nồng, tiền bạc dư giả, "
      s+="sanh con trai và con gái nên danh phận."; break;
    case 9: // Dậu
      s="Chồng tuổi can Mậu cưới vợ tuổi Dậu: vợ chồng nửa chừng phân ly. Chồng có đời vợ sau thì được đầm "
      s+="ấm bền duyên và có con cái đông đủ. Gia đạo vui vầy, làm ăn thanh phát."; break;
    case 10: // Tuất
      s="Chồng tuổi can Mậu cưới vợ tuổi Tuất: duyên do nơi tiền định. Vợ chồng ăn ở thuận hòa, trăm năm gắn bó, "
      s+="sanh con trai gái vẹn toàn. Vợ chồng chung sống đến tuổi già."; break;
    case 11: // Hợi
      s="Chồng tuổi can Mậu cưới vợ tuổi Hợi: cuộc sống theo nghề nông, làm ruộng, làm vườn rất thích hợp. "
      s+="Tình nghĩa vợ chồng không bền, e rằng nửa đời người vợ chết trước. "
      s+="Nên ăn ở có đạo đức tu hành mới sanh con cái đều đủ và sống lâu."; break;
    } break;
  case 5: // Kỷ 
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Kỷ cưới vợ tuổi Tý: cũng như rồng mây tương hội, cá nước duyên tình, vợ chồng tương đắc. "
      s+="Sanh con đầu lòng khó nuôi. Chỗ ăn ở dời đổi đôi ba lần. Nên tu tâm dưỡng tính mới yên, "
      s+="bằng không thì người vợ sẽ bị nạn chết truớc."; break;
    case 1: // Sửu
      s="Chồng tuổi can Kỷ cưới vợ tuổi Sửu: Cũng như rồng mây tương hội, cá nước duyên tình, vợ chồng tương đắc. "
      s+="Sanh con đầu lòng khó nuôi. Chỗ ăn ở dời đổi đôi ba lần. Nên tu tâm dưỡng tính mới yên, "
      s+="bằng không thì người vợ sẽ bị nạn chết truớc."; break;
    case 2: // Dần
      s="Chồng tuổi can Kỷ cưới vợ tuổi Dần: chỉ ăn ở cùng nhau một khoảng thời gian rồi phân ly. "
      s+="Người chồng sau sẽ cưới vợ khác mới có con cái. Tuổi già chỉ có 1 người con trai mà thôi."; break;
    case 3: // Mão
      s="Chồng tuổi can Kỷ cưới vợ tuổi Mão: chỉ ăn ở cùng nhau một khoảng thời gian rồi phân ly. "
      s+="Người chồng sau sẽ cưới vợ khác mới có con cái. Tuổi già chỉ có 1 người con trai mà thôi."; break;
    case 4: // Thìn
      s="Chồng tuổi can Kỷ cưới vợ tuổi Thìn: số người chồng phải có vợ lẻ, tuy vậy mà người chồng sẽ trở "
      s+="về với vợ lớn. Người vợ tái hợp xóa bỏ hết những ngày tuyệt vọng và sanh đủ con trai và con gái. "
      s+="Vợ chồng chung sống đến già, và làm ăn thịnh vượng."; break;
    case 5: // Tỵ
      s="Chồng tuổi can Kỷ cưới vợ tuổi Tỵ: số người chồng phải có vợ lẻ, tuy vậy mà người đàn ông sẽ trở "
      s+="về với vợ lớn. Người vợ tái hợp xóa bỏ hết những ngày tuyệt vọng và sanh đủ con trai và con gái. "
      s+="Vợ chồng chung sống đến già, và làm ăn thịnh vượng."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Kỷ cưới vợ tuổi Ngọ: vợ chồng ăn ở tâm đầu ý hiệp, thỏa chí ước ao, nhưng vì hoàn cảnh "
      s+="mà chồng phải có vợ thứ. Vợ sau ăn ở cũng hòa thuận và có con nên danh phận."; break;
    case 7: // Mùi
      s="Chồng tuổi can Kỷ cưới vợ tuổi Mùi: rất tốt, làm ăn cũng có khi thịnh khi suy, nhưng chung cuộc rồi "
      s+="vợ chồng được sống lâu và sang giàu, con cái đông đủ. Trong đứa con có người làm quan."; break;
    case 8: // Thân
      s="Chồng tuổi can Kỷ cưới vợ tuổi Thân: rất tốt, làm ăn cũng có khi thịnh khi suy, nhưng chung cuộc rồi "
      s+="vợ chồng được sống lâu và sang giàu, con cái đông đủ. Trong đứa con có người làm quan."; break;
    case 9: // Dậu
      s="Chồng tuổi can Kỷ cưới vợ tuổi Dậu: sống với nhau nửa chừng rồi vợ chồng phải phân ly vì cung mạng "
      s+="xung khắc. Nên tu tâm dưỡng tính mới yên tuổi già."; break;
    case 10: // Tuất
      s="Chồng tuổi can Kỷ cưới vợ tuổi Tuất: vợ chồng rất khổ nhọc trong buổi đầu, làm ăn thất bại, đến 30 tuổi "
      s+="trở đi mới khá sang giàu. Có nhiều con, nhưng không được hiếu hạnh. Vợ chồng chung sống đến già."; break;
    case 11: // Hợi
      s="Chồng tuổi can Kỷ cưới vợ tuổi Hợi: vợ chồng ăn ở tâm đầu ý hiệp, nhưng làm ăn có khi thành khi bại "
      s+="vô chừng, dù có của phụ ấm cũng hết. Đến 30 tuổi trở đi mới yên. Vợ chồng chung sống đến già."; break;
    } break;
  case 6: // Canh 
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Canh cưới vợ tuổi Tý: rất tốt. Trăm năm chồng xướng vợ tùy, làm ăn thịnh phát. "
      s+="Sanh trai gái đều đủ. Tuổi càng cao càng hưởng hạnh phúc."; break;
    case 1: // Sửu
      s="Chồng tuổi can Canh cưới vợ tuổi Sửu: vợ chồng rất xung khắc. Tuy có con cái đều đủ, "
      s+="nhưng không cậy nhờ. Người chồng sẽ chết trước vợ."; break;
    case 2: // Dần
      s="Chồng tuổi can Canh cưới vợ tuổi Dần: vợ chồng rất xung khắc. Tuy có con cái đều đủ, "
      s+="nhưng không cậy nhờ. Người chồng sẽ chết trước vợ."; break;
    case 3: // Mão
      s="Chồng tuổi can Canh cưới vợ tuổi Mão: rất tốt. Có con cái đều thông minh. Vợ chồng hòa thuận, "
      s+="nhưng gặp phận xấu vào tuổi 31, 33. Rồi cảnh nhà sẽ êm đẹp vinh hiển. "
      s+="Vợ chồng đều hưởng thọ cao."; break;
    case 4: // Thìn
      s="Chồng tuổi can Canh cưới vợ tuổi Thìn: vợ chồng làm ăn thường trở ngại. Có con cái đều đủ, "
      s+="người chồng không được chung tình. Người vợ nên ăn ở có đạo đức, e rằng người vợ chết trước."; break;
    case 5: // Tỵ
      s="Chồng tuổi can Canh cưới vợ tuổi Tỵ: vợ chồng làm ăn thường trở ngại. Có con cái đều đủ, "
      s+="người chồng không được chung tình. Người vợ nên ăn ở có đạo đức, e rằng người vợ chết trước."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Canh cưới vợ tuổi Ngọ: cũng như ngựa chạy đường dài, gà gáy sáng. Giàu sang thình lình. "
      s+="Tuy vậy, nên ăn ở có đạo đức mới giữ vững sản nghiệp. Vợ chồng chung sống đến già, "
      s+="con cái có đều đủ. Người vợ chết trước chồng."; break;
    case 7: // Mùi
      s="Chồng tuổi can Canh cưới vợ tuổi Mùi: trong buổi đầu khắn khít yêu đương nồng nhiệt, nhưng nửa chừng "
      s+="rơi vào cảnh phân ly, mặc dầu có con cái. Chung cuộc người chồng sẽ tái hôn, làm ăn thịnh vượng "
      s+="đến già."; break;
    case 8: // Thân
      s="Chồng tuổi can Canh cưới vợ tuổi Thân: trong buổi đầu khắn khít yêu đương nồng nhiệt, nhưng nửa chừng "
      s+="rơi vào cảnh phân ly, mặc dầu có con cái. Chung cuộc người chồng sẽ tái hôn, làm ăn thịnh vượng "
      s+="đến già."; break;
    case 9: // Dậu
      s="Chồng tuổi can Canh cưới vợ tuổi Dậu: trong buổi đầu vợ chồng vui vẻ mặn nồng, nhưng nửa chừng vợ chồng "
      s+="rơi vào cảnh phân ly. Tuy có con cũng không được nhờ cậy."; break;
    case 10: // Tuất
      s="Chồng tuổi can Canh cưới vợ tuổi Tuất: vợ chồng rất xung khắc và khó ăn ở cho đến chung cuộc. "
      s+="Con cái sẽ có nhiều bệnh tật. Người chồng sẽ có vợ sau và có con nên danh phận. "
      s+="Tuy có con nhưng cũng không được nhờ cậy."; break;
    case 11: // Hợi
      s="Chồng tuổi can Canh cưới vợ tuổi Hợi: vợ chồng như cây già trổ hoa. Từ 30 tuổi, gia đình gặp tai biến. "
      s+="Tuy có con đủ trai gái, nhưng thất bại. "
      s+="Người vợ đầu sẽ bị bệnh chết trước. Có vợ sau được yên vui. "
      s+="Đến khi lâm chung sẽ không thấy mặt các con."; break;
    } break;
  case 7: // Tân 
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Tân cưới vợ tuổi Tý: vợ chồng sống với nhau rất khắc kỵ; cho nên con cái không được tốt, "
      s+="'hữu sanh vô dưỡng'. Vợ chồng tuy yêu thương nhau, nhưng cũng gặp nhiều tai họa và "
      s+="thường hay lo buồn."; break;
    case 1: // Sửu
      s="Chồng tuổi can Tân cưới vợ tuổi Sửu: vợ chồng sống với nhau rất đầm ấm, tuy làm ăn có lúc thịnh lúc suy, "
      s+="nhưng từ 30 tuổi thì sẽ phát đạt. Con cái khó nuôi. Vợ chồng chung sống đến già."; break;
    case 2: // Dần
      s="Chồng tuổi can Tân cưới vợ tuổi Dần: vợ chồng sống với nhau rất đầm ấm, tuy làm ăn có lúc thịnh lúc suy, "
      s+="nhưng từ 30 tuổi thì sẽ phát đạt. Con cái khó nuôi. Vợ chồng chung sống đến già."; break;
    case 3: // Mão
      s="Chồng tuổi can Tân cưới vợ tuổi Mão: vợ chồng sống với nhau rất tương đắc êm đẹp như trăng Thu. "
      s+="Tuy buổi đầu có lúc nghèo khó, nhưng về sau thì phú quý. Sanh con trai gái đều đủ, "
      s+="sẽ có một người con thành đạt. Vợ chồng chung sống thọ đến già."; break;
    case 4: // Thìn
      s="Chồng tuổi can Tân cưới vợ tuổi Thìn: rất tốt. Cung mạng tương sanh, vợ chồng làm ăn phát đạt. "
      s+="Sanh con trai gái đầy đủ. Nếu người chồng có học vấn thì sau nầy công danh rực rỡ. "
      s+="Vợ chồng chung sống đến già."; break;
    case 5: // Tỵ
      s="Chồng tuổi can Tân cưới vợ tuổi Tỵ: rất tốt. Cung mạng tương sanh, vợ chồng làm ăn phát đạt. "
      s+="Sanh con trai gái đầy đủ. Nếu người chồng có học vấn thì sau nầy công danh rực rỡ. "
      s+="Vợ chồng chung sống đến già."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Tân cưới vợ tuổi Ngọ: rất tốt, ăn ở cùng nhau rất thuận hòa. Sanh con cái đông đủ. "
      s+="Có số thọ sang. Chỉ e người chồng có thêm vợ lẻ."; break;
    case 7: // Mùi
      s="Chồng tuổi can Tân cưới vợ tuổi Mùi: người vợ thường hay đau ốm. Có con cái đông đủ, "
      s+="con trai phát đạt công danh. Tiểu vận 31 tuổi gặp tai ách. Vợ chồng chung sống đến già."; break;
    case 8: // Thân
      s="Chồng tuổi can Tân cưới vợ tuổi Thân: người vợ thường hay đau ốm. Có con cái đông đủ, "
      s+="con trai phát đạt công danh. Tiểu vận 31 tuổi gặp tai ách. Vợ chồng chung sống đến già."; break;
    case 9: // Dậu
      s="Chồng tuổi can Tân cưới vợ tuổi Dậu: vợ chồng rất hòa thuận, người chồng sẽ làm nên sự nghiệp, "
      s+="chung hưởng đến già. Có con cái song khó nuôi. Vợ chồng có số thọ nhàn."; break;
    case 10: // Tuất
      s="Chồng tuổi can Tân cưới vợ tuổi Tuất: vợ chồng sống êm đẹp buổi ban đầu, sau hay tranh cãi. "
      s+="Tuy vậy, sanh con cái đầy đủ. E rằng người vợ phải chết trước."; break;
    case 11: // Hợi
      s="Chồng tuổi can Tân cưới vợ tuổi Hợi: vợ chồng sống êm đẹp buổi ban đầu, sau hay tranh cãi. "
      s+="Tuy vậy, sanh con cái đầy đủ. E rằng người vợ phải chết trước."; break;
    } break;
  case 8: // Nhâm 
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Nhâm cưới vợ tuổi Tý: rất tốt về cho mai sau. Trong buổi đầu gặp nhiều tai ách. "
      s+="Nên giữ lòng nhân hậu, hiếu đạo thì tốt bền. "
      s+="Vợ chồng chung sống đến già. Có số thọ nhàn."; break;
    case 1: // Sửu
      s="Chồng tuổi can Nhâm cưới vợ tuổi Sửu: vợ chồng sống hòa thuận. Con cái tuy đông, nhưng thường bệnh tật "
      s+="và khó nuôi. Chung cuộc vợ chồng được sống dai đến già, nhưng trong cảnh hiu quạnh."; break;
    case 2: // Dần
      s="Chồng tuổi can Nhâm cưới vợ tuổi Dần: vợ chồng sống hòa thuận. Con cái tuy đông, nhưng thường bệnh tật "
      s+="và khó nuôi. Chung cuộc vợ chồng được sống dai đến già, nhưng trong cảnh hiu quạnh."; break;
    case 3: // Mão
      s="Chồng tuổi can Nhâm cưới vợ tuổi Mão: thường bất lợi. Tuy có con cái đông, song tuổi già chịu cảnh "
      s+="cực nhọc vất vả. Người vợ thường đau ốm bệnh hoạn. Nên tu thân mới yên gia đạo."; break;
    case 4: // Thìn
      s="Chồng tuổi can Nhâm cưới vợ tuổi Thìn: vợ chồng sống với nhau lúc đầu đầm ấm, về sau phải phân ly, "
      s+="mặc dầu có con cái đông đủ."; break;
    case 5: // Tỵ
      s="Chồng tuổi can Nhâm cưới vợ tuổi Tỵ: vợ chồng thường gặp nhiều trở ngại buổi ban đầu. "
      s+="Con cháu có đều đủ. Tuy vợ chồng không được hòa hợp hạnh phúc, nhưng chung sống đến già."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Nhâm cưới vợ tuổi Ngọ: thường hay bất hòa. Khoảng trung niên thường gặp tai ách. "
      s+="Sanh con trai gái đều đủ. Tuy có của mà không được sung sướng. E rằng người vợ sẽ chết trước. "
      s+="Nên tu nhân tích đức may qua khỏi."; break;
    case 7: // Mùi
      s="Chồng tuổi can Nhâm cưới vợ tuổi Mùi: vợ chồng thường bị khẩu thiệt, nhưng cũng chung sống đến già. "
      s+="Sanh con trai gái đều đủ và nên danh phận."; break;
    case 8: // Thân
      s="Chồng tuổi can Nhâm cưới vợ tuổi Thân: thường trở ngại bước công danh. Tuy vậy từ 30 tuổi trở đi sẽ "
      s+="phát đạt. Có con nhưng khó nuôi. Vợ chồng cùng sống đến tuổi cao và thọ nhàn."; break;
    case 9: // Dậu
      s="Chồng tuổi can Nhâm cưới vợ tuổi Dậu: gặp cảnh khó khăn, công danh lỡ dở, có con không nhờ. "
      s+="E rằng vợ chồng phải phân ly. Nên lấy âm đức mà ăn ở với nhau mới tốt."; break;
    case 10: // Tuất
      s="Chồng tuổi can Nhâm cưới vợ tuổi Tuất: vợ chồng tương đắc và ăn ở cùng nhau đến già. "
      s+="Con cái đều đủ. Hậu vận làm nên. Số trường thọ hưởng phúc thanh nhàn."; break;
    case 11: // Hợi
      s="Chồng tuổi can Nhâm cưới vợ tuổi Hợi: vợ chồng tương đắc, ăn ở cùng nhau đến già. "
      s+="Con cái đều đủ. Hậu vận làm nên. Số trường thọ hưởng phúc thanh nhàn."; break;
    } break;
  case 9: // Quý 
    switch(chi) {
    case 0: // Tý
      s="Chồng tuổi can Quý cưới vợ tuổi Tý: rất thuận hòa. Sanh con trai gái đông đủ. Gặp năm Tuất và "
      s+="năm Hợi sẽ có sự thay đổi chỗ ăn ở, và phát đạt thịnh cường."; break;
    case 1: // Sửu
      s="Chồng tuổi can Quý cưới vợ tuổi Sửu: rất tốt, cũng như trăng mùa Thu tỏ rạng. Vợ chồng ăn ở hòa thuận. "
      s+="Sanh con trái gái đều đủ. Về sau có người con sẽ phát đạt giàu sang."; break;
    case 2: // Dần
      s="Chồng tuổi can Quý cưới vợ tuổi Dần: rất tốt, cũng như trăng mùa Thu tỏ rạng. Vợ chồng ăn ở hòa thuận. "
      s+="Sanh con trái gái đều đủ. Về sau có người con sẽ phát đạt giàu sang."; break;
    case 3: // Mão
      s="Chồng tuổi can Quý cưới vợ tuổi Mão: cũng như hoa cỏ gặp mùa Xuân tươi thắm. Nhưng nửa đời phải chịu "
      s+="cảnh ly biệt, tuy sanh con đều đủ. Tuổi già sung sướng."; break;
    case 4: // Thìn
      s="Chồng tuổi can Quý cưới vợ tuổi Thìn: rất tốt. Sanh con trai gái đều đủ. Chừng tuổi già thì phải chịu "
      s+="cảnh cơ hàn nghèo khổ, nhưng được trường thọ."; break;
    case 5: // Tỵ
      s="Chồng tuổi can Quý cưới vợ tuổi Tỵ: rất tốt. Sanh con trai gái đều đủ. Về tuổi già thì phải chịu cảnh "
      s+="cơ hàn, nhưng được trường thọ."; break;
    case 6: // Ngọ
      s="Chồng tuổi can Quý cưới vợ tuổi Ngọ: rất tốt. Công danh phát đạt. Sanh con cái đều đủ và ngoan hiền. "
      s+="Vợ chồng chung hưởng đến già."; break;
    case 7: // Mùi
      s="Chồng tuổi can Quý cưới vợ tuổi Mùi: vợ chồng nửa đời phải cảnh phân ly, mặc dù sanh con trai gái đều đủ, "
      s+="có công danh."; break;
    case 8: // Thân
      s="Chồng tuổi can Quý cưới vợ tuổi Thân: vợ chồng nửa đời phải cảnh phân ly, mặc dù sanh con trai gái đều đủ, "
      s+="có công danh."; break;
    case 9: // Dậu
      s="Chồng tuổi can Quý cưới vợ tuổi Dậu: rất tốt. Trăm năm kết dãi tâm đồng đến già. "
      s+="Sanh được nhiều con cái."; break;
    case 10: // Tuất
      s="Chồng tuổi can Quý cưới vợ tuổi Tuất: việc làm ăn thường thất bại. Người vợ hay bệnh hoạn. Số có công danh "
      s+="nhưng phát đạt muộn vì nửa đời gặp phải tai ách. Vợ chồng chung sống đến già."; break;
    case 11: // Hợi
      s="Chồng tuổi can Quý cưới vợ tuổi Hợi: việc làm ăn thường thất bại. Người vợ hay bệnh hoạn. Số có công danh "
      s+="nhưng phát đạt muộn vì nửa đời gặp phải tai ách. Vợ chồng chung sống đến già."; break;
    }
  }
  return s;
}

// nam nữ ngũ hành hôn phối ca
function honPhoi(nam, nu)
{
  var s;
  switch(nam) {
  case 0:
    switch(nu) {
    case 0: // nam mộc nữ mộc
      s = "Song mộc phu thê nan tương hợp, tiền tài hữu đa diệc khắc tử. Nguyên lai lưỡng mệnh tương khắc hại, tai nan tật bệnh đa như lưu."; break;
    case 1: // nam mộc nữ hỏa
      s = "Mộc hỏa phu thê đại cát xương, thử môn thiên định hảo nhân duyên. Lục súc nô tì mãn thành hành, nam nữ thông minh phúc tự long."; break;
    case 2: // nam mộc nữ thổ
            s = "Mộc thổ phu thê bổn bất nghi, tai nan tật bệnh lai xâm chi. Lưỡng mệnh tương khắc các phân tán, nhất thế cô đơn cô dạ đề."; break;
    case 3: // nam mộc nữ kim
      s = "Nam mộc nữ kim bất tương nghi, tiền tài lục súc hữu khả hỉ. Phủ dưỡng tử nữ tính danh dương, nhân duyên thủy chung hữu thương bi."; break;
    case 4: // nam mộc nữ thủy
      s = "Nam mộc nữ thủy đại cát xương, thử môn thiên định hảo nhân duyên. Thường hữu phú quý trọng như sơn, sanh lai nhân nữ phi thanh sam."; break;
    } break;
  case 1:
    switch(nu) {
    case 0: // nam hỏa nữ mộc
      s = "Hỏa mộc phu thê hảo hôn phối, tử tôn hưng vượng gia nghiệp long. Lục súc tiền tài giai phong túc, nhất thế phú quý đại cát xương."; break;
    case 1: // nam hỏa nữ hỏa
      s = "Lưỡng hỏa phu thê nhật dạ sầu, thê li tử tán lệ thủy lưu. Lưỡng mệnh tương khắc nghi bất thú (không nên lấy nhau), tứ quý cô độc độ xuân thu."; break;
    case 2: // nam hỏa nữ thổ
      s = "Thổ hỏa phu thê hảo tương phối, cao quan lộc vị đắc trung cử. Lưỡng mệnh hợp lai vô khắc hại, nhân nữ thông minh vĩnh phú quý."; break;
    case 3: // nam hỏa nữ kim
      s = "Hỏa kim phu thê khắc lục thân, bất tri hình hại tại hà phương. Nhược hữu ẩn lai bất hiếu thuận, họa cập tử tôn thủ cô bần."; break;
    case 4: // nam hỏa nữ thủy
      s = "Hỏa thủy phu thê một hữu tình, đế kết nhân duyên diệc vô căn. Nhân nữ nhược thị hữu phú quý, đáo lão đô thị cô độc nhân."; break;
    } break;
  case 2:
    switch(nu) {
    case 0: // nam thổ nữ mộc
      s = "Thổ mộc phu thê ý bất đồng, phản mục vô tình tương khắc xung. Hữu thực vô nhân khắc phu chủ, bán thế hôn nhân gia trung không."; break;
    case 1: // nam thổ nữ hỏa
      s = "Thổ hỏa phu thê đại cát xương, tiền lương bất sầu phúc thọ trường. Nhân nữ thông minh sanh đoan chánh, phú quý vinh hoa hảo thời quang."; break;
    case 2: // nam thổ nữ thổ
      s = "Song thổ phu thê hảo nhân duyên, cộng hoan nhất thế phúc song toàn. Nhân nữ thông minh đa hưng vượng, vinh hoa phú quý hảo gia viên."; break;
    case 3: // nam thổ nữ kim
      s = "Thổ kim phu thê hảo nhân duyên, lưỡng khẩu tương ái chí bách niên. Gia trạch bình an lục súc vượng, sanh lai nhân nữ quân đoàn viên."; break;
    case 4: // nam thổ nữ thủy
      s = "Thổ thủy phu thê định hữu hại, tiếp đáo gia trung định hữu tai. Thê li tử tán các đông tây, gia trung lãnh lạc chiêu bất lai."; break;
    } break;
  case 3:
    switch(nu) {
    case 0: // nam kim nữ mộc
      s = "Kim mộc phu thê bất đa niên, tranh sảo đả giá lệ liên liên. Nguyên lai lưỡng mệnh tương khắc hại, bán thế hôn nhân thủ quả duyên."; break;
    case 1: // nam kim nữ hỏa
      s = "Vị hữu nhân duyên loạn thành thân, thú (lấy vợ) đắc thê lai dã thị bần. Nhược vô tử nữ gia bại tán, kim hỏa nguyên lai hại bổn mệnh."; break;
    case 2: // nam kim nữ thổ
      s = "Kim thổ phu thê hảo nhân duyên, cật xuyên bất sầu phúc tự nhiên. Tử tôn hưng vượng gia phú quý, phúc lộc song toàn vạn vạn niên."; break;
    case 3: // nam kim nữ kim
      s = "Lưỡng kim phu thê ngạnh đối ngạnh, nam nữ bất hợp thủ không phòng. Nhật dạ tranh đả ngôn bất hợp, các nhân các tâm các bạch nhãn."; break;
    case 4: // nam kim nữ thủy
      s = "Kim thủy phu thê tọa cao đường, tiền tài tích súc hỉ dương dương (vui mừng mênh mang). Tử nữ nhị nhân sanh đoan chánh, cá cá thông minh học văn chương."; break;
    } break;
  case 4:
    switch(nu) {
    case 0: // nam thủy nữ mộc
      s = "Thủy mộc phu thê hảo nhân duyên, tài bảo phú quý vượng nhân lang. Châu mã hòa cốc tích mãn đường, nhân nữ thông minh học văn chương."; break;
    case 1: // nam thủy nữ hỏa
      s = "Thủy hỏa phu thê bất khả phối, tại gia cật phạn vãng ngoại thụy. Nguyên lai lưỡng mệnh tương khắc hại, bán thế nhân hôn bán thế sầu."; break;
    case 2: // nam thủy nữ thổ
      s = "Thủy thổ phu thê bất cửu tồn, tam lục cửu ngũ kiến ôn thần. Lưỡng mệnh tương khắc diệc nan quá, biệt xứ tha hương giá biệt lang."; break;
    case 3: // nam thủy nữ kim
      s = "Kim thủy phu thê tọa cao đường, tiền tài tích tụ mãn ốc tràng. hôn nhân hòa hợp các trình huy, điền trạch hòa khố dữ thọ trường."; break;
    case 4: // nam thủy nữ thủy
      s = "Lưỡng thủy phu thê hỉ dương dương, nhân nữ thông minh gia hưng vượng. Hôn nhân mĩ mãn phúc song toàn, mãn thương tài sản hảo phong quang."; break
    } break;
  }
  return s;
}
