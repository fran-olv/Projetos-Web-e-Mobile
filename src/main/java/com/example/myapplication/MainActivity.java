package com.example.myapplication;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        EditText edtV1Prog = (EditText) findViewById(R.id.edtV1);
        EditText edtV2Prog = (EditText) findViewById(R.id.edtV2);
        EditText edtTotalProg = (EditText) findViewById(R.id.edtTotal);
        Button btnSomarProg = (Button) findViewById(R.id.btnSomar);
        Button btnLimparProg = (Button) findViewById(R.id.btnLimpar);

        // setOnClicck monitora quando o botao é clicado
        btnSomarProg.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                double valor1 = Double.parseDouble(edtV1Prog.getText().toString());
                double valor2 = Double.parseDouble(edtV2Prog.getText().toString());

                double resultado = valor1 + valor2;

                edtTotalProg.setText(String.valueOf(resultado));

            }
        });



        btnLimparProg.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                edtTotalProg.setText("");
                edtV1Prog.setText("");
                edtV2Prog.setText("");
                edtV1Prog.requestFocus();
            }
        });

    }
}
