CREATE TABLE tacgia(
ma_tgia INT(3) UNSIGNED NOT NULL PRIMARY KEY,
ten_tgia VARCHAR(100) NOT NULL,
hinh_tgia VARCHAR(100)
)

CREATE TABLE theloai(
ma_tloai INT(3) UNSIGNED NOT NULL PRIMARY KEY,
ten_tloai VARCHAR(200) NOT NULL
)

CREATE TABLE baiviet(
ma_bviet INT(3) UNSIGNED NOT NULL PRIMARY KEY,
tieude VARCHAR(200) NOT NULL,
ten_bhat VARCHAR(100) NOT NULL,
ma_tloai INT(3) UNSIGNED NOT NULL,
tomtat TEXT NOT NULL,
noidung TEXT,
ma_tgia INT(3) UNSIGNED NOT NULL,
ngayviet DATETIME DEFAULT CURRENT_TIMESTAMP(),
hinhanh VARCHAR(200),
FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai),
FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia)
)

INSERT INTO tacgia  VALUES 
(1, 'Tac gia 1', NULL),
(2, 'Tac gia 2', NULL),
(3, 'Tac gia 3', NULL),
(4, 'Tac gia 4', NULL),
(5, 'Tac gia 5', NULL),
(6, 'Tac gia 6', NULL);

INSERT INTO theloai VALUES
(1, 'tl1'), (2, 'tl2'), (3, 'tl3'),
(4, 'tl4'), (5, 'tl5'), (6, 'tl6');

INSERT INTO baiviet (ma_bviet,tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
(1,'Bài viết 1', 'Tên bài viết 1', 1, 'Tóm tắt bài viết 1', 'Nội dung bài viết 1', 1, 'hinh_baiviet_1.jpg'),
(2,'Bài viết 2', 'Tên bài viết 2', 2, 'Tóm tắt bài viết 2', 'Nội dung bài viết 2', 2, NULL),
(3,'Bài viết 3', 'Tên bài viết 3', 3, 'Tóm tắt bài viết 3', 'Nội dung bài viết 3', 3, 'hinh_baiviet_3.jpg'),
(4,'Bài viết 4', 'Tên bài viết 4', 1, 'Tóm tắt bài viết 4', 'Nội dung bài viết 4', 4, NULL),
(5,'Bài viết 5', 'Tên bài viết 5', 2, 'Tóm tắt bài viết 5', 'Nội dung bài viết 5', 5, 'hinh_baiviet_5.jpg');



















)



















