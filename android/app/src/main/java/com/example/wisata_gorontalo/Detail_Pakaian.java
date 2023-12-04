package com.example.wisata_gorontalo;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Context;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;

import java.util.List;

public class Detail_Pakaian extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail_pakaian);


        ImageView imageView = findViewById(R.id.poster_image);
        TextView title_tv = findViewById(R.id.mTitle);
        TextView overview_tv = findViewById(R.id.movervie_tv);
        TextView lokasi_tv = findViewById(R.id.alamat);

//        TextView lokasi2_tv = findViewById(R.id.tv);
//        lokasi2_tv.setMovementMethod(LinkMovementMethod.getInstance());


        Bundle bundle = getIntent().getExtras();

        String mTitle = bundle.getString("nama_peninggalan");
        String mPoster = bundle.getString("foto");
        String mOverView = bundle.getString("keterangan");
        String mLokasi = bundle.getString("nama_daerah");
//        double mRating = bundle.getDouble("rating");

        Glide.with(this).load(mPoster).into(imageView);
        title_tv.setText(mTitle);
        overview_tv.setText(mOverView);
        lokasi_tv.setText(mLokasi);


    }


}