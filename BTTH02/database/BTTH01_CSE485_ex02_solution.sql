/*  */
/* a/ liet ke cac bai nhac the loai nhac tru tinh */
INSERT INTO theloai VALUES (7, 'Nhạc trữ tình') 
INSERT INTO baiviet (ma_bviet,tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
(6,'Bài viết 6', 'bai hat tru tinh 6', 7, 'Tóm tắt bài viết 1', 'Nội dung bài viết 1', 1, NULL),
(7,'Bài viết 7', 'bai hat tru tinh 7', 7, 'Tóm tắt bài viết 2', 'Nội dung bài viết 2', 2, NULL),
(8,'Bài viết 8', 'Tên bài viết 8', 3, 'Tóm tắt bài viết 3', 'Nội dung bài viết 3', 3, NULL),
(9,'Bài viết 9', 'bai hat tru tinh 9', 7, 'Tóm tắt bài viết 4', 'Nội dung bài viết 4', 4, NULL);

SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai = "Nhạc trữ tình";

/* b/ liet ke bai viet cua tac gia Nhacvietplus  */
INSERT INTO tacgia  VALUES  (7, 'Nhacvietplus', NULL)
INSERT INTO baiviet (ma_bviet,tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
(10,'Bài viết 10', 'Tên bài viết 10', 1, 'Tóm tắt bài viết 1', 'Nội dung bài viết 1', 7, 'hinh_baiviet_1.jpg'),
(11,'Bài viết 11', 'Tên bài viết 11', 2, 'Tóm tắt bài viết 2', 'Nội dung bài viết 2', 2, NULL),
(12,'Bài viết 12', 'Tên bài viết 12', 3, 'Tóm tắt bài viết 3', 'Nội dung bài viết 3', 7, NULL);

SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, baiviet.tomtat, baiviet.noidung
FROM baiviet
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = 'Nhacvietplus';

/* c/ Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào */
SELECT theloai.ma_tloai, theloai.ten_tloai
FROM theloai
LEFT JOIN baiviet
ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_bviet IS NULL;

/* d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên
thể loại, ngày viết */
SELECT baiviet.ma_bviet, baiviet.tieudebaiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia

/* e. Tìm thể loại có số bài viết nhiều nhất */
SELECT theloai.ten_tloai, COUNT(baiviet.ma_bviet) AS so_baiviet
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ten_tloai
ORDER BY so_baiviet DESC
LIMIT 1

/* f. Liệt kê 2 tác giả có số bài viết nhiều nhất  */
SELECT tacgia.ten_tgia, COUNT(baiviet.ma_bviet) AS so_baiviet
FROM tacgia
LEFT JOIN baiviet ON tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY tacgia.ten_tgia
ORDER BY so_baiviet DESC
LIMIT 2

/* g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”,
“em” */
INSERT INTO baiviet (ma_bviet,tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
(13,'Bài viết 1', 'Anh và em', 1, 'Tóm tắt bài viết 1', 'Nội dung bài viết 1', 4, 'hinh_baiviet_1.jpg'),
(14,'Bài viết 2', 'Thương', 2, 'Tóm tắt bài viết 2', 'Nội dung bài viết 2', 2, NULL),
(15,'Bài viết 3', 'Hãy trao cho anh', 5, 'Tóm tắt bài viết 3', 'Nội dung bài viết 3', 3, 'hinh_baiviet_3.jpg'); 

SELECT baiviet.ten_bhat
FROM baiviet
WHERE ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%' OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%'

/* h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ
“yêu”, “thương”, “anh”, “em” */
INSERT INTO baiviet (ma_bviet,tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
(16,'Yêu', 'Anh và em', 1, 'Tóm tắt bài viết 1', 'Nội dung bài viết 1', 4, 'hinh_baiviet_1.jpg'),
(17,'Vì anh thương em', 'Thương', 2, 'Tóm tắt bài viết 2', 'Nội dung bài viết 2', 2, NULL),
(18,'Em ơi', 'Hãy trao cho anh', 5, 'Tóm tắt bài viết 3', 'Nội dung bài viết 3', 3, 'hinh_baiviet_3.jpg'); 

SELECT baiviet.tieude, baiviet.ten_bhat
FROM baiviet
WHERE ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%' OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%'
OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR tieude LIKE '%yêu%' OR tieude LIKE '%thương%'

/* i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên
thể loại và tên tác giả  */
CREATE VIEW vw_Music AS 
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai, tacgia.ten_tgia
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia

/* j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về 
danh sách B ài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi */


/* k. Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo */


/* l. Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng
Đăng nhập/Quản trị trang web.  */



































