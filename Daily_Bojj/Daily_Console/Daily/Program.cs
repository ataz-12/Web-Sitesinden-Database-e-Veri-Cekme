using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Net;
using System.IO;
using System.Web;
using System.Data.SqlClient;
using System.Data;
using System.Globalization;
using System.Runtime.InteropServices;
using HtmlAgilityPack;

namespace Daily
{
    class Program
    {
        //[DllImport("kernel32.dll")]
        //static extern IntPtr GetConsoleWindow();

        //[DllImport("user32.dll")]
        //static extern bool ShowWindow(IntPtr hWnd, int nCmdShow);


        static void Main(string[] args)
        {
            //const int SW_HIDE = 0;
            //var handle = GetConsoleWindow();

            ////// Hide
            //ShowWindow(handle, SW_HIDE);


            string conn = "Server=DESKTOP-NONT79G; Database=Test; User=ahmetakyuz; Password=12345; ";
            SqlConnection x = new SqlConnection(conn);
            x.Open();
            string sql = "Delete from Daily";
            SqlCommand cmd = new SqlCommand(sql, x);
            cmd.ExecuteNonQuery();
            x.Close();
            //Siteden veri alma
            Uri url = new Uri("http://www.stat-search.boj.or.jp/ssi/mtshtml/fm08_d_1_en.html");
            WebClient client = new WebClient();
            string html = client.DownloadString(url);
            HtmlAgilityPack.HtmlDocument dokuman = new HtmlAgilityPack.HtmlDocument();
            dokuman.LoadHtml(html);
            // kur tarih değer ayırma
            foreach (HtmlNode deger in dokuman.DocumentNode.SelectNodes("//tr[@align='right']"))
            {
                string currency = "";
                double rate = 0.0;
                string y_deger = deger.InnerText;
                string date = y_deger.Substring(0, 10);
                string currency_rate = y_deger.Substring(10);
                string _rate = currency_rate.Substring(6);
                bool sonuc1 = _rate.Contains("NA");
                bool sonuc2 = _rate.Contains("ND");
                // currency
                if ((sonuc1 == false) && (sonuc2 == false))
                {
                    currency = currency_rate.Substring(0, 6);
                    Console.Write(currency.ToString() + "\n");
                }
                // rate
                if ((sonuc1 == false) && (sonuc2 == false))
                {
                rate = Convert.ToDouble(_rate, NumberFormatInfo.InvariantInfo);
                    //       //Console.Write(rate.ToString() + "\n");
                }

                string conn2 = "Server=DESKTOP-NONT79G; Database=Test; User=ahmetakyuz; Password=12345; ";
                SqlConnection x2 = new SqlConnection(conn2);
                x2.Open();
                string sql2 = "INSERT INTO Daily(date,currency,rate) VALUES (@date,@currency,@rate)";
                SqlCommand cmd2 = new SqlCommand(sql2, x2);
                cmd2.Parameters.AddWithValue("@currency", SqlDbType.NVarChar).SqlValue = currency;
                cmd2.Parameters.AddWithValue("@rate", SqlDbType.Float).SqlValue = rate;
                cmd2.Parameters.AddWithValue("@date",SqlDbType.DateTime).SqlValue = date;
                cmd2.ExecuteNonQuery();
                x2.Close();
            }

        }
    }
}

