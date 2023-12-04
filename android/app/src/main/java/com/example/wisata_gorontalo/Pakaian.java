package com.example.wisata_gorontalo;

public class Pakaian
{
        private String title , poster , overview, nama_daerah;

        public Pakaian (String title , String poster , String overview, String nama_daerah){
            this.title = title;
            this.poster = poster;
            this.overview = overview;
            this.nama_daerah = nama_daerah;

        }

        public String getTitle() {
            return title;
        }

        public String getPoster() {
            return poster;
        }

        public String getOverview() {
            return overview;
        }

        public String getNama_daerah() {
            return nama_daerah;
    }
}