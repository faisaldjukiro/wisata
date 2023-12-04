package com.example.wisata_gorontalo;

public class Movie {

    private String title , poster , overview, lokasi , nama_daerah;

    public Movie(String title , String poster , String overview, String lokasi, String nama_daerah){
        this.title = title;
        this.poster = poster;
        this.overview = overview;
        this.lokasi = lokasi;
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
    public String getLokasi(){
        return lokasi;
    }

    public String getNama_daerah() {
        return nama_daerah;
    }
}