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
using System.Xml.XPath;
namespace C_B_IRAN
{
    class Program
    {
        static void Main(string[] args)
        {
            string conn = "Server=DESKTOP-NONT79G; Database=Test; User=ahmetakyuz; Password=12345; ";
            SqlConnection x = new SqlConnection(conn);
            x.Open();
            string sql = "Delete from C_B_IRAN";
            SqlCommand cmd = new SqlCommand(sql, x);
            cmd.ExecuteNonQuery();
            x.Close();
            // 1 yearly
            string file = "C:\\Users\\Ahmet Akyüz\\Desktop\\Staj\\C_B_IRAN\\data_1.xml";
            // 1 monthly
            //   string file2 = "C:\\Users\\Ahmet Akyüz\\Desktop\\Staj\\C_B_IRAN\\data.xml";
            XPathDocument XML = new XPathDocument(file);
            XPathNavigator nav = XML.CreateNavigator();
            XPathNodeIterator date = nav.Select("exchangerates/currency[@id='USD']/rate/date");
            XPathNodeIterator USD = nav.Select("exchangerates/currency[@id='USD']/rate/value");
            XPathNodeIterator GBP = nav.Select("exchangerates/currency[@id='GBP']/rate/value");
            XPathNodeIterator CHF = nav.Select("exchangerates/currency[@id='CHF']/rate/value");
            XPathNodeIterator SEK = nav.Select("exchangerates/currency[@id='SEK']/rate/value");
          
            XPathNodeIterator NOK = nav.Select("exchangerates/currency[@id='NOK']/rate/value");
            XPathNodeIterator DKK = nav.Select("exchangerates/currency[@id='DKK']/rate/value");
            XPathNodeIterator INR = nav.Select("exchangerates/currency[@id='INR']/rate/value");
            XPathNodeIterator AED = nav.Select("exchangerates/currency[@id='AED']/rate/value");
            XPathNodeIterator KWD = nav.Select("exchangerates/currency[@id='KWD']/rate/value");
          
            XPathNodeIterator PKR100 = nav.Select("exchangerates/currency[@id='PKR100']/rate/value");
            XPathNodeIterator JPY100 = nav.Select("exchangerates/currency[@id='JPY100']/rate/value");
            XPathNodeIterator HKD = nav.Select("exchangerates/currency[@id='HKD']/rate/value");
            XPathNodeIterator OMR = nav.Select("exchangerates/currency[@id='OMR']/rate/value");
            XPathNodeIterator CAD = nav.Select("exchangerates/currency[@id='CAD']/rate/value");
          
            XPathNodeIterator ZAR = nav.Select("exchangerates/currency[@id='ZAR']/rate/value");
            XPathNodeIterator TRY = nav.Select("exchangerates/currency[@id='TRY']/rate/value");
            XPathNodeIterator RUB = nav.Select("exchangerates/currency[@id='RUB']/rate/value");
            XPathNodeIterator QAR = nav.Select("exchangerates/currency[@id='QAR']/rate/value");
            XPathNodeIterator IQD100 = nav.Select("exchangerates/currency[@id='IQD100']/rate/value");
          
            XPathNodeIterator SYP = nav.Select("exchangerates/currency[@id='SYP']/rate/value");
            XPathNodeIterator AUD = nav.Select("exchangerates/currency[@id='AUD']/rate/value");
            XPathNodeIterator SAR = nav.Select("exchangerates/currency[@id='SAR']/rate/value");
            XPathNodeIterator BHD = nav.Select("exchangerates/currency[@id='BHD']/rate/value");
            XPathNodeIterator SGD = nav.Select("exchangerates/currency[@id='SGD']/rate/value");
          
            XPathNodeIterator LKR10 = nav.Select("exchangerates/currency[@id='LKR10']/rate/value");
            XPathNodeIterator NPR100 = nav.Select("exchangerates/currency[@id='NPR100']/rate/value");
            XPathNodeIterator AMD100 = nav.Select("exchangerates/currency[@id='AMD100']/rate/value");
            XPathNodeIterator LYD = nav.Select("exchangerates/currency[@id='LYD']/rate/value");
            XPathNodeIterator CNY = nav.Select("exchangerates/currency[@id='CNY']/rate/value");
       
            XPathNodeIterator THB100 = nav.Select("exchangerates/currency[@id='THB100']/rate/value");
            XPathNodeIterator MYR = nav.Select("exchangerates/currency[@id='MYR']/rate/value");
            XPathNodeIterator KRW1000 = nav.Select("exchangerates/currency[@id='KRW1000']/rate/value");
            XPathNodeIterator EUR = nav.Select("exchangerates/currency[@id='EUR']/rate/value");
            XPathNodeIterator KZT100 = nav.Select("exchangerates/currency[@id='KZT100']/rate/value");
       
            XPathNodeIterator AFN = nav.Select("exchangerates/currency[@id='AFN']/rate/value");
            XPathNodeIterator BYN = nav.Select("exchangerates/currency[@id='BYN']/rate/value");
            XPathNodeIterator AZN = nav.Select("exchangerates/currency[@id='AZN']/rate/value");
            XPathNodeIterator TJS = nav.Select("exchangerates/currency[@id='TJS']/rate/value");
            XPathNodeIterator VEF = nav.Select("exchangerates/currency[@id='VEF']/rate/value");
            while (  
                     date.MoveNext() && USD.MoveNext() && GBP.MoveNext() && CHF.MoveNext() && SEK.MoveNext() &&
                     NOK.MoveNext() && DKK.MoveNext() && INR.MoveNext() && AED.MoveNext() && KWD.MoveNext() && 
                     PKR100.MoveNext() && JPY100.MoveNext() && HKD.MoveNext() && OMR.MoveNext() && CAD.MoveNext() &&
                     ZAR.MoveNext() && TRY.MoveNext() && RUB.MoveNext() && QAR.MoveNext() && IQD100.MoveNext() &&
                     SYP.MoveNext() && AUD.MoveNext() && SAR.MoveNext() &&  BHD.MoveNext() && SGD.MoveNext() && 
                     LKR10.MoveNext() && NPR100.MoveNext() &&AMD100.MoveNext() && LYD.MoveNext() && CNY.MoveNext() &&
                     THB100.MoveNext() &&MYR.MoveNext() &&KRW1000.MoveNext() &&EUR.MoveNext() && KZT100.MoveNext() &&
                     AFN.MoveNext() && BYN.MoveNext() && AZN.MoveNext() &&TJS.MoveNext() &&VEF.MoveNext()
                 )
            {
               
                 
                Console.WriteLine(date.Current.Value);
                string conn1 = "Server=DESKTOP-NONT79G; Database=Test; User=ahmetakyuz; Password=12345; ";
                SqlConnection x1 = new SqlConnection(conn1);
                x1.Open();
                string sql2 = "INSERT INTO C_B_IRAN(date,USD,GBP,CHF,SEK,NOK,DKK,INR,AED,KWD,PKR100,JPY100,HKD,OMR,CAD,ZAR,TRY,RUB,QAR,IQD100,SYP,AUD,SAR,BHD,SGD,LKR10,NPR100,AMD100,LYD,CNY,THB100,MYR,KRW1000,EUR,KZT100,AFN,BYN,AZN,TJS,VEF) VALUES (@date,@USD,@GBP,@CHF,@SEK,@NOK,@DKK,@INR,@AED,@KWD,@PKR100,@JPY100,@HKD,@OMR,@CAD,@ZAR,@TRY,@RUB,@QAR,@IQD100,@SYP,@AUD,@SAR,@BHD,@SGD,@LKR10,@NPR100,@AMD100,@LYD,@CNY,@THB100,@MYR,@KRW1000,@EUR,@KZT100,@AFN,@BYN,@AZN,@TJS,@VEF)";
                SqlCommand cmd2 = new SqlCommand(sql2, x1);
                cmd2.Parameters.AddWithValue("@date", SqlDbType.Date).SqlValue = date.Current.Value;
                cmd2.Parameters.AddWithValue("@USD", SqlDbType.NVarChar).SqlValue = USD.Current.Value;
                cmd2.Parameters.AddWithValue("@GBP", SqlDbType.NVarChar).SqlValue = GBP.Current.Value;
                cmd2.Parameters.AddWithValue("@CHF", SqlDbType.NVarChar).SqlValue = CHF.Current.Value;
                cmd2.Parameters.AddWithValue("@SEK", SqlDbType.NVarChar).SqlValue = SEK.Current.Value;

                cmd2.Parameters.AddWithValue("@NOK", SqlDbType.NVarChar).SqlValue = NOK.Current.Value;
                cmd2.Parameters.AddWithValue("@DKK", SqlDbType.NVarChar).SqlValue = DKK.Current.Value;
                cmd2.Parameters.AddWithValue("@INR", SqlDbType.NVarChar).SqlValue = INR.Current.Value;
                cmd2.Parameters.AddWithValue("@AED", SqlDbType.NVarChar).SqlValue = AED.Current.Value;
                cmd2.Parameters.AddWithValue("@KWD", SqlDbType.NVarChar).SqlValue = KWD.Current.Value;

                cmd2.Parameters.AddWithValue("@PKR100", SqlDbType.NVarChar).SqlValue = PKR100.Current.Value;
                cmd2.Parameters.AddWithValue("@JPY100", SqlDbType.NVarChar).SqlValue = JPY100.Current.Value;
                cmd2.Parameters.AddWithValue("@HKD", SqlDbType.NVarChar).SqlValue = HKD.Current.Value;
                cmd2.Parameters.AddWithValue("@OMR", SqlDbType.NVarChar).SqlValue = OMR.Current.Value;
                cmd2.Parameters.AddWithValue("@CAD", SqlDbType.NVarChar).SqlValue = CAD.Current.Value;

                cmd2.Parameters.AddWithValue("@ZAR", SqlDbType.NVarChar).SqlValue = ZAR.Current.Value;
                cmd2.Parameters.AddWithValue("@TRY", SqlDbType.NVarChar).SqlValue = TRY.Current.Value;
                cmd2.Parameters.AddWithValue("@RUB", SqlDbType.NVarChar).SqlValue = RUB.Current.Value;
                cmd2.Parameters.AddWithValue("@QAR", SqlDbType.NVarChar).SqlValue = QAR.Current.Value;
                cmd2.Parameters.AddWithValue("@IQD100", SqlDbType.NVarChar).SqlValue = IQD100.Current.Value;

                cmd2.Parameters.AddWithValue("@SYP", SqlDbType.NVarChar).SqlValue = SYP.Current.Value;
                cmd2.Parameters.AddWithValue("@AUD", SqlDbType.NVarChar).SqlValue = AUD.Current.Value;
                cmd2.Parameters.AddWithValue("@SAR", SqlDbType.NVarChar).SqlValue = SAR.Current.Value;
                cmd2.Parameters.AddWithValue("@BHD", SqlDbType.NVarChar).SqlValue = BHD.Current.Value;
                cmd2.Parameters.AddWithValue("@SGD", SqlDbType.NVarChar).SqlValue = SGD.Current.Value;

                cmd2.Parameters.AddWithValue("@LKR10", SqlDbType.NVarChar).SqlValue = LKR10.Current.Value;
                cmd2.Parameters.AddWithValue("@NPR100", SqlDbType.NVarChar).SqlValue = NPR100.Current.Value;
                cmd2.Parameters.AddWithValue("@AMD100", SqlDbType.NVarChar).SqlValue = AMD100.Current.Value;
                cmd2.Parameters.AddWithValue("@LYD", SqlDbType.NVarChar).SqlValue = LYD.Current.Value;
                cmd2.Parameters.AddWithValue("@CNY", SqlDbType.NVarChar).SqlValue = CNY.Current.Value;

                cmd2.Parameters.AddWithValue("@THB100", SqlDbType.NVarChar).SqlValue = THB100.Current.Value;
                cmd2.Parameters.AddWithValue("@MYR", SqlDbType.NVarChar).SqlValue = MYR.Current.Value;
                cmd2.Parameters.AddWithValue("@KRW1000", SqlDbType.NVarChar).SqlValue = KRW1000.Current.Value;
                cmd2.Parameters.AddWithValue("@EUR", SqlDbType.NVarChar).SqlValue = EUR.Current.Value;
                cmd2.Parameters.AddWithValue("@KZT100", SqlDbType.NVarChar).SqlValue = KZT100.Current.Value;

                cmd2.Parameters.AddWithValue("@AFN", SqlDbType.NVarChar).SqlValue = AFN.Current.Value;
                cmd2.Parameters.AddWithValue("@BYN", SqlDbType.NVarChar).SqlValue = BYN.Current.Value;
                cmd2.Parameters.AddWithValue("@AZN", SqlDbType.NVarChar).SqlValue = AZN.Current.Value;
                cmd2.Parameters.AddWithValue("@TJS", SqlDbType.NVarChar).SqlValue = TJS.Current.Value;
                cmd2.Parameters.AddWithValue("@VEF", SqlDbType.NVarChar).SqlValue = VEF.Current.Value;
                cmd2.ExecuteNonQuery();
                x1.Close(); }
            Console.ReadKey();
        }
    }
}






