DROP DATABASE IF EXISTS music_db;
CREATE DATABASE IF NOT EXISTS music_db;
USE music_db;

CREATE TABLE music_table (
	track_id INT PRIMARY KEY AUTO_INCREMENT,
	track_file CHAR(75),
	track_key ENUM("a","aSharp","b","c","cSharp","d","dSharp","e","f","fSharp","g","gSharp"),
	track_tone ENUM("major","minor"),
	track_tempo ENUM("slow","medium","fast"),
	track_scale_1 CHAR(75),
	track_scale_2 CHAR(75)
)ENGINE=InnoDB AUTO_INCREMENT=10000;

INSERT INTO music_table
	VALUES
	(NULL, "a_major_fast_01.wav", "a", "major", "fast", "major-scale_a.png","minor-scale_fSharp.png"),
	(NULL, "a_major_fast_02.wav", "a", "major", "fast", "major-scale_a.png","minor-scale_fSharp.png"),
	(NULL, "a_major_fast_03.wav", "a", "major", "fast", "major-scale_a.png","minor-scale_fSharp.png"),
	(NULL, "a_major_medium_01.wav", "a", "major", "medium", "major-scale_a.png","minor-scale_fSharp.png"),
	(NULL, "a_major_medium_02.wav", "a", "major", "medium", "major-scale_a.png","minor-scale_fSharp.png"),
	(NULL, "a_major_medium_03.wav", "a", "major", "medium", "major-scale_a.png","minor-scale_fSharp.png"),
	(NULL, "a_major_slow_01.wav", "a", "major", "slow", "major-scale_a.png","minor-scale_fSharp.png"),
	(NULL, "a_major_slow_02.wav", "a", "major", "slow", "major-scale_a.png","minor-scale_fSharp.png"),
	(NULL, "a_major_slow_03.wav", "a", "major", "slow", "major-scale_a.png","minor-scale_fSharp.png"),
	(NULL, "a_minor_fast_01.wav", "a", "minor", "fast", "minor-scale_a.png","major-scale_c.png"),
	(NULL, "a_minor_fast_02.wav", "a", "minor", "fast", "minor-scale_a.png","major-scale_c.png"),
	(NULL, "a_minor_medium_01.wav", "a", "minor", "medium", "minor-scale_a.png","major-scale_c.png"),
	(NULL, "a_minor_medium_02.wav", "a", "minor", "medium", "minor-scale_a.png","major-scale_c.png"),
	(NULL, "a_minor_slow_01.wav", "a", "minor", "slow", "minor-scale_a.png","major-scale_c.png"),
	(NULL, "a_minor_slow_02.wav", "a", "minor", "slow", "minor-scale_a.png","major-scale_c.png"),
	(NULL, "aSharp_minor_fast_01.wav", "aSharp", "major", "fast", "major-scale_aSharp.png","minor-scale_g.png"),
	(NULL, "aSharp_minor_fast_02.wav", "aSharp", "major", "fast", "major-scale_aSharp.png","minor-scale_g.png"),
	(NULL, "aSharp_minor_fast_03.wav", "aSharp", "major", "fast", "major-scale_aSharp.png","minor-scale_g.png"),
	(NULL, "aSharp_minor_medium_01.wav", "aSharp", "major", "medium", "major-scale_aSharp.png","minor-scale_g.png"),
	(NULL, "aSharp_minor_medium_02.wav", "aSharp", "major", "medium", "major-scale_aSharp.png","minor-scale_g.png"),
	(NULL, "aSharp_minor_medium_03.wav", "aSharp", "major", "medium", "major-scale_aSharp.png","minor-scale_g.png"),
	(NULL, "aSharp_minor_slow_01.wav", "aSharp", "major", "slow", "major-scale_aSharp.png","minor-scale_g.png"),
	(NULL, "aSharp_minor_slow_02.wav", "aSharp", "major", "slow", "major-scale_aSharp.png","minor-scale_g.png"),
	(NULL, "aSharp_minor_slow_03.wav", "aSharp", "major", "slow", "major-scale_aSharp.png","minor-scale_g.png"),
	(NULL, "aSharp_minor_fast_01.wav", "aSharp", "minor", "fast", "minor-scale_aSharp.png","major-scale_cSharp.png"),
	(NULL, "aSharp_minor_fast_02.wav", "aSharp", "minor", "fast", "minor-scale_aSharp.png","major-scale_cSharp.png"),
	(NULL, "aSharp_minor_medium_01.wav", "aSharp", "minor", "medium", "minor-scale_aSharp.png","major-scale_cSharp.png"),
	(NULL, "aSharp_minor_medium_02.wav", "aSharp", "minor", "medium", "minor-scale_aSharp.png","major-scale_cSharp.png"),
	(NULL, "aSharp_minor_slow_01.wav", "aSharp", "minor", "slow", "minor-scale_aSharp.png","major-scale_cSharp.png"),
	(NULL, "aSharp_minor_slow_02.wav", "aSharp", "minor", "slow", "minor-scale_aSharp.png","major-scale_cSharp.png"),
	(NULL, "b_major_fast_01.wav", "b", "major", "fast", "major-scale_b.png","minor-scale_gSharp.png"),
	(NULL, "b_major_fast_02.wav", "b", "major", "fast", "major-scale_b.png","minor-scale_gSharp.png"),
	(NULL, "b_major_fast_03.wav", "b", "major", "fast", "major-scale_b.png","minor-scale_gSharp.png"),
	(NULL, "b_major_medium_01.wav", "b", "major", "medium", "major-scale_b.png","minor-scale_gSharp.png"),
	(NULL, "b_major_medium_02.wav", "b", "major", "medium", "major-scale_b.png","minor-scale_gSharp.png"),
	(NULL, "b_major_medium_03.wav", "b", "major", "medium", "major-scale_b.png","minor-scale_gSharp.png"),
	(NULL, "b_major_slow_01.wav", "b", "major", "slow", "major-scale_b.png","minor-scale_gSharp.png"),
	(NULL, "b_major_slow_02.wav", "b", "major", "slow", "major-scale_b.png","minor-scale_gSharp.png"),
	(NULL, "b_major_slow_03.wav", "b", "major", "slow", "major-scale_b.png","minor-scale_gSharp.png"),
	(NULL, "b_minor_fast_01.wav", "b", "minor", "fast", "minor-scale_b.png","major-scale_d.png"),
	(NULL, "b_minor_fast_02.wav", "b", "minor", "fast", "minor-scale_b.png","major-scale_d.png"),
	(NULL, "b_minor_medium_01.wav", "b", "minor", "medium", "minor-scale_b.png","major-scale_d.png"),
	(NULL, "b_minor_medium_02.wav", "b", "minor", "medium", "minor-scale_b.png","major-scale_d.png"),
	(NULL, "b_minor_slow_01.wav", "b", "minor", "slow", "minor-scale_b.png","major-scale_d.png"),
	(NULL, "b_minor_slow_02.wav", "b", "minor", "slow", "minor-scale_b.png","major-scale_d.png"),
	(NULL, "c_major_fast_01.wav", "c", "major", "fast", "major-scale_c.png","minor-scale_a.png"),
	(NULL, "c_major_fast_02.wav", "c", "major", "fast", "major-scale_c.png","minor-scale_a.png"),
	(NULL, "c_major_fast_03.wav", "c", "major", "fast", "major-scale_c.png","minor-scale_a.png"),
	(NULL, "c_major_medium_01.wav", "c", "major", "medium", "major-scale_c.png","minor-scale_a.png"),
	(NULL, "c_major_medium_02.wav", "c", "major", "medium", "major-scale_c.png","minor-scale_a.png"),
	(NULL, "c_major_medium_03.wav", "c", "major", "medium", "major-scale_c.png","minor-scale_a.png"),
	(NULL, "c_major_slow_01.wav", "c", "major", "slow", "major-scale_c.png","minor-scale_a.png"),
	(NULL, "c_major_slow_02.wav", "c", "major", "slow", "major-scale_c.png","minor-scale_a.png"),
	(NULL, "c_major_slow_03.wav", "c", "major", "slow", "major-scale_c.png","minor-scale_a.png"),
	(NULL, "c_minor_fast_01.wav", "c", "minor", "fast", "minor-scale_c.png","major-scale_dSharp.png"),
	(NULL, "c_minor_fast_02.wav", "c", "minor", "fast", "minor-scale_c.png","major-scale_dSharp.png"),
	(NULL, "c_minor_medium_01.wav", "c", "minor", "medium", "minor-scale_c.png","major-scale_dSharp.png"),
	(NULL, "c_minor_medium_02.wav", "c", "minor", "medium", "minor-scale_c.png","major-scale_dSharp.png"),
	(NULL, "c_minor_slow_01.wav", "c", "minor", "slow", "minor-scale_c.png","major-scale_dSharp.png"),
	(NULL, "c_minor_slow_02.wav", "c", "minor", "slow", "minor-scale_c.png","major-scale_dSharp.png"),
	(NULL, "cSharp_major_fast_01.wav", "cSharp", "major", "fast", "major-scale_cSharp.png","minor-scale_aSharp.png"),
	(NULL, "cSharp_major_fast_02.wav", "cSharp", "major", "fast", "major-scale_cSharp.png","minor-scale_aSharp.png"),
	(NULL, "cSharp_major_fast_03.wav", "cSharp", "major", "fast", "major-scale_cSharp.png","minor-scale_aSharp.png"),
	(NULL, "cSharp_major_medium_01.wav", "cSharp", "major", "medium", "major-scale_cSharp.png","minor-scale_aSharp.png"),
	(NULL, "cSharp_major_medium_02.wav", "cSharp", "major", "medium", "major-scale_cSharp.png","minor-scale_aSharp.png"),
	(NULL, "cSharp_major_medium_03.wav", "cSharp", "major", "medium", "major-scale_cSharp.png","minor-scale_aSharp.png"),
	(NULL, "cSharp_major_slow_01.wav", "cSharp", "major", "slow", "major-scale_cSharp.png","minor-scale_aSharp.png"),
	(NULL, "cSharp_major_slow_02.wav", "cSharp", "major", "slow", "major-scale_cSharp.png","minor-scale_aSharp.png"),
	(NULL, "cSharp_major_slow_03.wav", "cSharp", "major", "slow", "major-scale_cSharp.png","minor-scale_aSharp.png"),
	(NULL, "cSharp_minor_fast_01.wav", "cSharp", "minor", "fast", "minor-scale_cSharp.png","major-scale_e.png"),
	(NULL, "cSharp_minor_fast_02.wav", "cSharp", "minor", "fast", "minor-scale_cSharp.png","major-scale_e.png"),
	(NULL, "cSharp_minor_medium_01.wav", "cSharp", "minor", "medium", "minor-scale_cSharp.png","major-scale_e.png"),
	(NULL, "cSharp_minor_medium_02.wav", "cSharp", "minor", "medium", "minor-scale_cSharp.png","major-scale_e.png"),
	(NULL, "cSharp_minor_slow_01.wav", "cSharp", "minor", "slow", "minor-scale_cSharp.png","major-scale_e.png"),
	(NULL, "cSharp_minor_slow_02.wav", "cSharp", "minor", "slow", "minor-scale_cSharp.png","major-scale_e.png"),
	(NULL, "d_major_fast_01.wav", "d", "major", "fast", "major-scale_d.png","minor-scale_b.png"),
	(NULL, "d_major_fast_02.wav", "d", "major", "fast", "major-scale_d.png","minor-scale_b.png"),
	(NULL, "d_major_fast_03.wav", "d", "major", "fast", "major-scale_d.png","minor-scale_b.png"),
	(NULL, "d_major_medium_01.wav", "d", "major", "medium", "major-scale_d.png","minor-scale_b.png"),
	(NULL, "d_major_medium_02.wav", "d", "major", "medium", "major-scale_d.png","minor-scale_b.png"),
	(NULL, "d_major_medium_03.wav", "d", "major", "medium", "major-scale_d.png","minor-scale_b.png"),
	(NULL, "d_major_slow_01.wav", "d", "major", "slow", "major-scale_d.png","minor-scale_b.png"),
	(NULL, "d_major_slow_02.wav", "d", "major", "slow", "major-scale_d.png","minor-scale_b.png"),
	(NULL, "d_major_slow_03.wav", "d", "major", "slow", "major-scale_d.png","minor-scale_b.png"),
	(NULL, "d_minor_fast_01.wav", "d", "minor", "fast", "minor-scale_d.png","major-scale_f.png"),
	(NULL, "d_minor_fast_02.wav", "d", "minor", "fast", "minor-scale_d.png","major-scale_f.png"),
	(NULL, "d_minor_medium_01.wav", "d", "minor", "medium", "minor-scale_d.png","major-scale_f.png"),
	(NULL, "d_minor_medium_02.wav", "d", "minor", "medium", "minor-scale_d.png","major-scale_f.png"),
	(NULL, "d_minor_slow_01.wav", "d", "minor", "slow", "minor-scale_d.png","major-scale_f.png"),
	(NULL, "d_minor_slow_02.wav", "d", "minor", "slow", "minor-scale_d.png","major-scale_f.png"),
	(NULL, "dSharp_major_fast_01.wav", "dSharp", "major", "fast", "major-scale_dSharp.png","minor-scale_c.png"),
	(NULL, "dSharp_major_fast_02.wav", "dSharp", "major", "fast", "major-scale_dSharp.png","minor-scale_c.png"),
	(NULL, "dSharp_major_fast_03.wav", "dSharp", "major", "fast", "major-scale_dSharp.png","minor-scale_c.png"),
	(NULL, "dSharp_major_medium_01.wav", "dSharp", "major", "medium", "major-scale_dSharp.png","minor-scale_c.png"),
	(NULL, "dSharp_major_medium_02.wav", "dSharp", "major", "medium", "major-scale_dSharp.png","minor-scale_c.png"),
	(NULL, "dSharp_major_medium_03.wav", "dSharp", "major", "medium", "major-scale_dSharp.png","minor-scale_c.png"),
	(NULL, "dSharp_major_slow_01.wav", "dSharp", "major", "slow", "major-scale_dSharp.png","minor-scale_c.png"),
	(NULL, "dSharp_major_slow_02.wav", "dSharp", "major", "slow", "major-scale_dSharp.png","minor-scale_c.png"),
	(NULL, "dSharp_major_slow_03.wav", "dSharp", "major", "slow", "major-scale_dSharp.png","minor-scale_c.png"),
	(NULL, "dSharp_minor_fast_01.wav", "dSharp", "minor", "fast", "minor-scale_dSharp.png","major-scale_fSharp.png"),
	(NULL, "dSharp_minor_fast_02.wav", "dSharp", "minor", "fast", "minor-scale_dSharp.png","major-scale_fSharp.png"),
	(NULL, "dSharp_minor_medium_01.wav", "dSharp", "minor", "medium", "minor-scale_dSharp.png","major-scale_fSharp.png"),
	(NULL, "dSharp_minor_medium_02.wav", "dSharp", "minor", "medium", "minor-scale_dSharp.png","major-scale_fSharp.png"),
	(NULL, "dSharp_minor_slow_01.wav", "dSharp", "minor", "slow", "minor-scale_dSharp.png","major-scale_fSharp.png"),
	(NULL, "dSharp_minor_slow_02.wav", "dSharp", "minor", "slow", "minor-scale_dSharp.png","major-scale_fSharp.png"),
	(NULL, "e_major_fast_01.wav", "e", "major", "fast", "major-scale_e.png","minor-scale_cSharp.png"),
	(NULL, "e_major_fast_02.wav", "e", "major", "fast", "major-scale_e.png","minor-scale_cSharp.png"),
	(NULL, "e_major_fast_03.wav", "e", "major", "fast", "major-scale_e.png","minor-scale_cSharp.png"),
	(NULL, "e_major_medium_01.wav", "e", "major", "medium", "major-scale_e.png","minor-scale_cSharp.png"),
	(NULL, "e_major_medium_02.wav", "e", "major", "medium", "major-scale_e.png","minor-scale_cSharp.png"),
	(NULL, "e_major_medium_03.wav", "e", "major", "medium", "major-scale_e.png","minor-scale_cSharp.png"),
	(NULL, "e_major_slow_01.wav", "e", "major", "slow", "major-scale_e.png","minor-scale_cSharp.png"),
	(NULL, "e_major_slow_02.wav", "e", "major", "slow", "major-scale_e.png","minor-scale_cSharp.png"),
	(NULL, "e_major_slow_03.wav", "e", "major", "slow", "major-scale_e.png","minor-scale_cSharp.png"),
	(NULL, "e_minor_fast_01.wav", "e", "minor", "fast", "minor-scale_e.png","major-scale_g.png"),
	(NULL, "e_minor_fast_02.wav", "e", "minor", "fast", "minor-scale_e.png","major-scale_g.png"),
	(NULL, "e_minor_medium_01.wav", "e", "minor", "medium", "minor-scale_e.png","major-scale_g.png"),
	(NULL, "e_minor_medium_02.wav", "e", "minor", "medium", "minor-scale_e.png","major-scale_g.png"),
	(NULL, "e_minor_slow_01.wav", "e", "minor", "slow", "minor-scale_e.png","major-scale_g.png"),
	(NULL, "e_minor_slow_02.wav", "e", "minor", "slow", "minor-scale_e.png","major-scale_g.png"),
	(NULL, "f_major_fast_01.wav", "f", "major", "fast", "major-scale_f.png","minor-scale_d.png"),
	(NULL, "f_major_fast_02.wav", "f", "major", "fast", "major-scale_f.png","minor-scale_d.png"),
	(NULL, "f_major_fast_03.wav", "f", "major", "fast", "major-scale_f.png","minor-scale_d.png"),
	(NULL, "f_major_medium_01.wav", "f", "major", "medium", "major-scale_f.png","minor-scale_d.png"),
	(NULL, "f_major_medium_02.wav", "f", "major", "medium", "major-scale_f.png","minor-scale_d.png"),
	(NULL, "f_major_medium_03.wav", "f", "major", "medium", "major-scale_f.png","minor-scale_d.png"),
	(NULL, "f_major_slow_01.wav", "f", "major", "slow", "major-scale_f.png","minor-scale_d.png"),
	(NULL, "f_major_slow_02.wav", "f", "major", "slow", "major-scale_f.png","minor-scale_d.png"),
	(NULL, "f_major_slow_03.wav", "f", "major", "slow", "major-scale_f.png","minor-scale_d.png"),
	(NULL, "f_minor_fast_01", "f", "minor", "fast", "minor-scale_f.png","major-scale_gSharp.png"),
	(NULL, "f_minor_fast_02", "f", "minor", "fast", "minor-scale_f.png","major-scale_gSharp.png"),
	(NULL, "f_minor_medium_01", "f", "minor", "medium", "minor-scale_f.png","major-scale_gSharp.png"),
	(NULL, "f_minor_medium_02", "f", "minor", "medium", "minor-scale_f.png","major-scale_gSharp.png"),
	(NULL, "f_minor_slow_01", "f", "minor", "slow", "minor-scale_f.png","major-scale_gSharp.png"),
	(NULL, "f_minor_slow_02", "f", "minor", "slow", "minor-scale_f.png","major-scale_gSharp.png"),
	(NULL, "fSharp_major_fast_01.wav", "fSharp", "major", "fast", "major-scale_fSharp.png","minor-scale_dSharp.png"),
	(NULL, "fSharp_major_fast_02.wav", "fSharp", "major", "fast", "major-scale_fSharp.png","minor-scale_dSharp.png"),
	(NULL, "fSharp_major_fast_03.wav", "fSharp", "major", "fast", "major-scale_fSharp.png","minor-scale_dSharp.png"),
	(NULL, "fSharp_major_medium_01.wav", "fSharp", "major", "medium", "major-scale_fSharp.png","minor-scale_dSharp.png"),
	(NULL, "fSharp_major_medium_02.wav", "fSharp", "major", "medium", "major-scale_fSharp.png","minor-scale_dSharp.png"),
	(NULL, "fSharp_major_medium_03.wav", "fSharp", "major", "medium", "major-scale_fSharp.png","minor-scale_dSharp.png"),
	(NULL, "fSharp_major_slow_01.wav", "fSharp", "major", "slow", "major-scale_fSharp.png","minor-scale_dSharp.png"),
	(NULL, "fSharp_major_slow_02.wav", "fSharp", "major", "slow", "major-scale_fSharp.png","minor-scale_dSharp.png"),
	(NULL, "fSharp_major_slow_03.wav", "fSharp", "major", "slow", "major-scale_fSharp.png","minor-scale_dSharp.png"),
	(NULL, "fSharp_minor_fast_01.wav", "fSharp", "minor", "fast", "minor-scale_fSharp.png","major-scale_a.png"),
	(NULL, "fSharp_minor_fast_02.wav", "fSharp", "minor", "fast", "minor-scale_fSharp.png","major-scale_a.png"),
	(NULL, "fSharp_minor_medium_01.wav", "fSharp", "minor", "medium", "minor-scale_fSharp.png","major-scale_a.png"),
	(NULL, "fSharp_minor_medium_02.wav", "fSharp", "minor", "medium", "minor-scale_fSharp.png","major-scale_a.png"),
	(NULL, "fSharp_minor_slow_01.wav", "fSharp", "minor", "slow", "minor-scale_fSharp.png","major-scale_a.png"),
	(NULL, "fSharp_minor_slow_02.wav", "fSharp", "minor", "slow", "minor-scale_fSharp.png","major-scale_a.png"),
	(NULL, "g_major_fast_01.wav", "g", "major", "fast", "major-scale_g.png","minor-scale_e.png"),
	(NULL, "g_major_fast_02.wav", "g", "major", "fast", "major-scale_g.png","minor-scale_e.png"),
	(NULL, "g_major_fast_03.wav", "g", "major", "fast", "major-scale_g.png","minor-scale_e.png"),
	(NULL, "g_major_medium_01.wav", "g", "major", "medium", "major-scale_g.png","minor-scale_e.png"),
	(NULL, "g_major_medium_02.wav", "g", "major", "medium", "major-scale_g.png","minor-scale_e.png"),
	(NULL, "g_major_medium_03.wav", "g", "major", "medium", "major-scale_g.png","minor-scale_e.png"),
	(NULL, "g_major_slow_01.wav", "g", "major", "slow", "major-scale_g.png","minor-scale_e.png"),
	(NULL, "g_major_slow_02.wav", "g", "major", "slow", "major-scale_g.png","minor-scale_e.png"),
	(NULL, "g_major_slow_03.wav", "g", "major", "slow", "major-scale_g.png","minor-scale_e.png"),
	(NULL, "g_minor_fast_01.wav", "g", "minor", "fast", "minor-scale_g.png","major-scale_aSharp.png"),
	(NULL, "g_minor_fast_02.wav", "g", "minor", "fast", "minor-scale_g.png","major-scale_aSharp.png"),
	(NULL, "g_minor_medium_01.wav", "g", "minor", "medium", "minor-scale_g.png","major-scale_aSharp.png"),
	(NULL, "g_minor_medium_02.wav", "g", "minor", "medium", "minor-scale_g.png","major-scale_aSharp.png"),
	(NULL, "g_minor_slow_01.wav", "g", "minor", "slow", "minor-scale_g.png","major-scale_aSharp.png"),
	(NULL, "g_minor_slow_02.wav", "g", "minor", "slow", "minor-scale_g.png","major-scale_aSharp.png"),
	(NULL, "gSharp_major_fast_01.wav", "gSharp", "major", "fast", "major-scale_gSharp.png","minor-scale_f.png"),
	(NULL, "gSharp_major_fast_02.wav", "gSharp", "major", "fast", "major-scale_gSharp.png","minor-scale_f.png"),
	(NULL, "gSharp_major_fast_03.wav", "gSharp", "major", "fast", "major-scale_gSharp.png","minor-scale_f.png"),
	(NULL, "gSharp_major_medium_01.wav", "gSharp", "major", "medium", "major-scale_gSharp.png","minor-scale_f.png"),
	(NULL, "gSharp_major_medium_02.wav", "gSharp", "major", "medium", "major-scale_gSharp.png","minor-scale_f.png"),
	(NULL, "gSharp_major_medium_03.wav", "gSharp", "major", "medium", "major-scale_gSharp.png","minor-scale_f.png"),
	(NULL, "gSharp_major_slow_01.wav", "gSharp", "major", "slow", "major-scale_gSharp.png","minor-scale_f.png"),
	(NULL, "gSharp_major_slow_02.wav", "gSharp", "major", "slow", "major-scale_gSharp.png","minor-scale_f.png"),
	(NULL, "gSharp_major_slow_03.wav", "gSharp", "major", "slow", "major-scale_gSharp.png","minor-scale_f.png"),
	(NULL, "gSharp_minor_fast_01.wav", "gSharp", "minor", "fast", "minor-scale_gSharp.png","major-scale_b.png"),
	(NULL, "gSharp_minor_fast_02.wav", "gSharp", "minor", "fast", "minor-scale_gSharp.png","major-scale_b.png"),
	(NULL, "gSharp_minor_medium_01.wav", "gSharp", "minor", "medium", "minor-scale_gSharp.png","major-scale_b.png"),
	(NULL, "gSharp_minor_medium_02.wav", "gSharp", "minor", "medium", "minor-scale_gSharp.png","major-scale_b.png"),
	(NULL, "gSharp_minor_slow_01.wav", "gSharp", "minor", "slow", "minor-scale_gSharp.png","major-scale_b.png"),
	(NULL, "gSharp_minor_slow_02.wav", "gSharp", "minor", "slow", "minor-scale_gSharp.png","major-scale_b.png");
	
	
SHOW DATABASES;
SHOW TABLES;
SELECT * FROM music_table;